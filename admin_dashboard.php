<?php
session_start();
include 'config/db.php';

// Check if admin is logged in
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: admin_login.php");
    exit();
}

// Fetch orders
$orders = $conn->query("SELECT * FROM orders ORDER BY id DESC");

// Fetch contact messages
$contacts = $conn->query("SELECT * FROM contacts ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="index.css">
</head>

<body class="bg-light">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.html">Debbie's Delights</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="admin_dashboard.php">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h2 class="text-center">Welcome Admin</h2>

        <!-- Orders Section -->
        <div class="card my-4">
            <div class="card-header">
                <h3 class="text-dark">Orders</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Product</th>
                            <th>Inspo Image</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($order = $orders->fetch_assoc()) { ?>
                            <tr>
                                <td><?= $order['id'] ?></td>
                                <td><?= $order['name'] ?></td>
                                <td><?= $order['email'] ?></td>
                                <td><?= $order['phone'] ?></td>
                                <td><?= $order['product'] ?></td>
                                <td>
                                    <?php
                                    $imagePath = "uploads/" . htmlspecialchars($order['inspo']);

                                    // Debugging
                                    echo "<p>Path: $imagePath</p>"; // Show path to check if it's correct

                                    if (!empty($order['inspo']) && file_exists($imagePath)): ?>
                                        <img src="<?= $imagePath ?>" width="100" height="100" class="img-thumbnail">
                                    <?php else: ?>
                                        <span class="text-danger">No image</span>
                                    <?php endif; ?>
                                </td>



                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Contact Messages Section -->
        <div class="card">
            <div class="card-header ">
                <h3 class="text-dark">Contact Messages</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Message</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($contact = $contacts->fetch_assoc()) { ?>
                            <tr>
                                <td><?= $contact['id'] ?></td>
                                <td><?= $contact['name'] ?></td>
                                <td><?= $contact['email'] ?></td>
                                <td><?= $contact['message'] ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <footer class="footer mt-4">
        <div class="container text-center">
            <p>© 2024 Debbie's Delights. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
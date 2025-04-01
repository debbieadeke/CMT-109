<?php
include 'config/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $product = htmlspecialchars($_POST['product']);
    $inspo = "";

    // File Upload Handling
    if (!empty($_FILES['inspo']['name'])) {
        $targetDir = "uploads/";
        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0777, true);
        }

        $fileName = time() . "_" . basename($_FILES["inspo"]["name"]);
        $targetFilePath = $targetDir . $fileName;

        if (move_uploaded_file($_FILES["inspo"]["tmp_name"], $targetFilePath)) {
            $inspo = $targetFilePath;
        } else {
            die("File upload failed!");
        }
    }

    // Insert into database
    $sql = "INSERT INTO orders (name, email, phone, product, inspo) VALUES ('$name', '$email', '$phone', '$product', '$inspo')";

    if ($conn->query($sql) === TRUE) {
        $last_id = $conn->insert_id; // Get the last inserted ID

        // Retrieve the inserted data
        $result = $conn->query("SELECT * FROM orders WHERE id = $last_id");
        $order = $result->fetch_assoc();
    } else {
        die("Database error: " . $conn->error);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container text-white">
            <!-- Logo -->
            <a class="navbar-brand" href="index.html">Debbie's Delights</a>

            <!-- Mobile Button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="products.html">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="order.php">Order Confirmation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="card mt-4 mx-auto" style="max-width: 600px;">
        <div class="card-header">
            <h3 class="text-dark">Order Confirmation</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered mt-3">
                <tr>
                    <th>Full Name</th>
                    <td><?= htmlspecialchars($order['name']) ?></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><?= htmlspecialchars($order['email']) ?></td>
                </tr>
                <tr>
                    <th>Phone</th>
                    <td><?= htmlspecialchars($order['phone']) ?></td>
                </tr>
                <tr>
                    <th>Product Ordered</th>
                    <td><?= htmlspecialchars($order['product']) ?></td>
                </tr>
                <tr>
                    <th>Inspiration Photo</th>
                    <td>
                        <?php if (!empty($order['inspo'])): ?>
                            <img src="<?= $order['inspo'] ?>" alt="Uploaded Image" width="200">
                        <?php else: ?>
                            No image uploaded
                        <?php endif; ?>
                    </td>
                </tr>
            </table>
        </div>

        <div class="row mb-4">
            <div class="col-12 col-md-6 g-2">
                <a href="order.php" class="btn btn-primary" id="sendmessage">Place Another Order</a>
            </div>
            <div class=" col-12 col-md-6 g-2">
                <a href="index.html" class="btn btn-primary" id="sendmessage">Home</a>

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
<?php
include 'config/db.php';

$sql = "SELECT * FROM orders ORDER BY created_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Orders</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>All Orders</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Product</th>
            <th>Image</th>
            <th>Date</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td><?php echo $row['product']; ?></td>
            <td>
                <?php if ($row['inspo']) { ?>
                    <img src="uploads/<?php echo $row['inspo']; ?>" width="100">
                <?php } else { echo "No Image"; } ?>
            </td>
            <td><?php echo $row['created_at']; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>

<?php
include 'config/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $product = $_POST['product'];
    $inspo = "";

    // Handle file upload
    if (!empty($_FILES['inspo']['name'])) {
        $targetDir = "uploads/";
        $inspo = basename($_FILES["inspo"]["name"]);
        $targetFilePath = $targetDir . $inspo;
        move_uploaded_file($_FILES["inspo"]["tmp_name"], $targetFilePath);
    }

    // Insert order into database
    $sql = "INSERT INTO orders (name, email, phone, product, inspo) 
            VALUES ('$name', '$email', '$phone', '$product', '$inspo')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Order placed successfully!'); window.location.href='order.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

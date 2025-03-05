<?php
// Include database connection
include 'config/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";

    // Get form data and prevent SQL injection
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    // Insert into database
    $sql = "INSERT INTO contacts (name, email, message) 
            VALUES ('$name', '$email', '$message')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Message sent successfully!'); window.location.href='contact.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

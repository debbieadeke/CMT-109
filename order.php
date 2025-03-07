<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order - Debbie's Delights</title>
    <link rel="stylesheet" href="index.css">
    <script src="index.js"></script>
</head>
<body>
    <nav class="navbar">
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="index.html#about">About</a></li>
            <li><a href="products.html">Products</a></li>
            <li><a href="order.php">Order</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>

    <section class="order">
        <h1 class="">Place Your Order</h1>
        <form action="process_order.php" method="POST" enctype="multipart/form-data">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Your Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required>

            <label for="product">What would you like to order?</label>
            <textarea id="product" name="product" required></textarea>

            <label for="inspo">Upload an Inspiration Photo:</label>
            <input type="file" id="inspo" name="inspo" accept="image/*">

            <button type="submit">Submit Order</button>
        </form>
    </section>

    <footer>
        <p>© 2024 Debbie's Delights. All Rights Reserved.</p>
    </footer>
</body>
</html>

<!-- <head>
    <link rel="stylesheet" href="index.css">

</head>

<section class="order">
    <h1>Place Your Order</h1>
    <form action="process_order.php" method="POST" enctype="multipart/form-data">
        <label for="name">Your Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Your Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" required>

        <label for="product">What would you like to order?</label>
        <textarea id="product" name="product" required></textarea>

        <label for="inspo">Upload an Inspiration Photo:</label>
        <input type="file" id="inspo" name="inspo" accept="image/*">

        <button type="submit">Submit Order</button>
    </form>
</section> -->

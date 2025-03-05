<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Debbie's Delights</title>
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

    <section class="contact-container">
        <!-- Left Side: Contact Form -->
        <div class="contact-form">
            <h2>Contact Us</h2>
            <form action="process_contact.php" method="POST">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your full name" required>
    
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
    
                <label for="message">Message</label>
                <textarea id="message" name="message" placeholder="Enter your message" required></textarea>
    
                <button type="submit">Send Message</button>
            </form>
        </div>
    
        <!-- Right Side: Location -->
        <div class="contact-location">
            <h2>Our Location</h2>
            <p><strong>📌 Address:</strong> Nairobi, Kenya</p>
            <p><strong>📞 Phone:</strong> +254116018633</p>
            <p><strong>📧 Email:</strong> orders@debbiesdelights.com</p>            
        </div>
    </section>
    

    <footer>
        <p>© 2024 Debbie's Delights. All Rights Reserved.</p>
    </footer>
</body>
</html>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Form</title>
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
                        <a class="nav-link" href="order.php">Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="contact.php">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body">
                        <h2 class="text-center">Contact Us</h2>
                        <form action="process_contact.php" method="POST">
                            <div class="mb-3">
                                <label for="name" class="form-label">Full Name</label>
                                <input type="text" id="name" name="name" class="form-control" placeholder="Enter your full name" required>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" required>
                            </div>

                            <div class="mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea id="message" name="message" class="form-control" rows="4" placeholder="Enter your message" required></textarea>
                            </div>

                            <button type="submit" class="btn w-100" id="sendmessage">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body">
                        <h2 class="text-center">Our Location</h2>
                        <p><i class="bi bi-geo-alt-fill"></i> Address:Nairobi, Kenya</p>
                        <p><i class="bi bi-telephone-fill"></i> Phone:+254 116 018 633</p>
                        <p><i class="bi bi-envelope-fill"></i> Email:orders@debbiesdelights.com</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <footer class="footer mt-4">
        <div class="container text-center">
            <p>© 2024 Debbie's Delights. All Rights Reserved.</p>
        </div>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</html>
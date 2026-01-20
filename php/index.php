<?php
session_start();
$isLoggedIn = isset($_SESSION['user']);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Food Order - Home</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <header>
        <h1 style="font-size:50px;">FoodiXpress</h1>
        <nav>
            <a href="index.php" class="btn hbtn">Home</a>
            <a href="../html/categories.html" class="btn hbtn">Categories</a>
            <a href="../html/foods.html" class="btn hbtn">Foods</a>
            <a href="../html/about.html" class="btn hbtn">About Us</a>
            <?php if (isset($_SESSION['user'])) { ?>
                <span class="welcomeuser">Welcome, <?= $_SESSION['user']; ?> !</span>
                <a href="logout.php" class="btn hbtn" style="color: white;">Logout</a>
            <?php } else { ?>
                <a href="../php/login.php" class="btn hbtn">Login</a>
            <?php } ?>
        </nav>
    </header>

    <section class="hero">
    <img src="../images/banner.webp" alt="Delicious Food">
    <div class="hero-text">
        <h2>Welcome to Our Food Ordering Website!</h2>
            <?php if (isset($_SESSION['user'])) { ?>
                <p>Hello, <?= $_SESSION['user']; ?>! Enjoy your meal.</p>
                <a href="../html/foods.html" class="btn">Order Now</a> <!-- Accessible only if logged in -->
            <?php } else { ?>
                <p>Order delicious food from the comfort of your home!</p>
            <a href="../php/login.php" class="btn order-btn">Login to Order</a> <!-- Redirects to login page -->
            <?php } ?>
    </div>
	</section>

    <!-- Featured Dishes Section -->
    <section class="featured">
        <h2>POPULAR DISHES</h2>
        <div class="food-container">
            <div class="food-item">
                <img src="../images/chicken.webp" alt="Chicken Sizzler">
                <p>Chicken Sizzler</p>
            </div>
            <div class="food-item">
                <img src="../images/burger.webp" alt="Burger">
                <p>Burger</p>
            </div>
            <div class="food-item">
                <img src="../images/pizza.webp" alt="Pizza">
                <p>Pizza</p>
            </div>
            <div class="food-item">
                <img src="../images/pasta.webp" alt="Pasta">
                <p>Pasta</p>
            </div>
            <div class="food-item">
                <img src="../images/noodles.webp" alt="Noodles">
                <p>Noodles</p>
            </div>
        </div>
        <h2>POPULAR DESSERTS</h2>
        <div class="food-container">
            <div class="food-item">
                <img src="../images/macarons.webp" alt="Macarons">
                <p>Macarons</p>
            </div>
            <div class="food-item">
                <img src="../images/tiramisu.webp" alt="Tiramisu">
                <p>Tiramisu</p>
            </div>
            <div class="food-item">
                <img src="../images/cheesecake.webp" alt="Cheesecake">
                <p>Cheesecake</p>
            </div>
            <div class="food-item">
                <img src="../images/Brownie.webp" alt="Brownie">
                <p>Brownie</p>
            </div>
        </div>
        <h2>POPULAR DRINKS</h2>
        <div class="food-container">
            <div class="food-item">
                <img src="../images/falooda.webp" alt="Falooda">
                <p>Falooda - Rs.350</p>
            </div>
            <div class="food-item">
                <img src="../images/smoothie.webp" alt="Smoothie">
                <p>Smoothie - Rs.150</p>
            </div>
            <div class="food-item">
                <img src="../images/hotchoc.webp" alt="Hot Chocolate">
                <p>Hot Chocolate - Rs.200</p>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-section">
                <h3>About Us</h3>
                <p>FoodiXpress delivers delicious food from your favorite restaurants straight to your door. Order now
                    and enjoy!</p>
            </div>

            <div class="footer-section">
                <h3>Contact Us</h3>
                <p>Email: support@foodieexpress.com</p>
                <p>Phone: +91 98765 43210</p>
                <p>Address: 123, Food Street, Your City, India</p>
            </div>

            <div class="footer-section">
                <h3>Follow Us</h3>
                <div class="social-icons">
                    <a href="www.facebook.com"><img src="../images/facebook.webp" alt="Facebook"></a>
                    <a href="#"><img src="../images/instagram.webp" alt="Instagram"></a>
                    <a href="#"><img src="../images/x logo.webp" alt="X"></a>
                </div>
            </div>

            <div class="footer-section">
                <h3>We Accept</h3>
                <img src="../images/visa.webp" alt="Visa">
                <img src="../images/mastercard.webp" alt="MasterCard">
                <img src="../images/payapl.webp" alt="PayPal">
                <img src="../images/upi.webp" alt="UPI">
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; 2025 FoodiXpress | All Rights Reserved</p>
        </div>
    </footer>

    <script>
        // Check if the user is logged in before ordering
        document.querySelector(".order-btn").addEventListener("click", function(event) {
            event.preventDefault(); // Prevent default anchor behavior
            
            var isLoggedIn = <?php echo json_encode($isLoggedIn); ?>;
            
            if (isLoggedIn) {
                window.location.href = "foods.html"; // Redirect to foods.html if logged in
            } else {
                alert("Please log in to place an order!");
                window.location.href = "login.php"; // Redirect to login.php if not logged in
            }
        });
    </script>

    <script src="../js/script.js"></script>
</body>
</html>

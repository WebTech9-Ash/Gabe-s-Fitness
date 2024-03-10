<?php
include("../setting/connection.php");
include("../setting/core.php");

isNotLogin();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gabe's Fitness - Home</title>
    <link rel="stylesheet" href="../css/homepage.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body class="light-mode">
    <header>
        <div class="container">
            <a class="logo"><img src="../assets/blogo.png"></a>
            <nav>
                <ul>
                    <li><a href="../view/homepage.php">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="../view/dashboard_view.php">Dashboard</a></li>
                    <li><a href="#">Profile</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
            <div class="user-account">
                <button class="btn_logout" id="btn_logout">Log out</button>
            </div>
             <img src="../assets/sun.png" id="toggle" alt="sun" onclick="toggleColorScheme()">
        </div>
    </header>

    <section class="hero">
        <div class="container">
            <img src="../assets/pexels-marcus-chan-17898141-removebg-preview.png"></img>
            <h1>Welcome to Gabe's Fitness</h1>
            <p>Where Knowledge Meets Vitality</p>
        </div>
    </section>
    <section class="testimonials">
        <h1>Testimonals</h1>
        <div class="testimonial-container">
            <div class="testimonial">
                <img src="../assets/test1.jpg" alt="Client 1">
                <blockquote>"Gabe's Fitness has transformed my life! I feel stronger, healthier, and more confident than ever before."</blockquote>
                <cite>Mary Jane</cite>
            </div>
            <div class="testimonial">
                <img src="../assets/test2.jpg" alt="Client 2">
                <blockquote>"The trainers at Gabe's Fitness are top-notch. They push you to your limits while providing the support you need to succeed."</blockquote>
                <cite>Peter Parker</cite>
            </div>
            <!-- Add more testimonials as needed -->
        </div>
    </section>
    

    <footer>
        <div class="container">
            <div class="contact-info">
                <h3>Contact Us</h3>
                <p>Ashesi University, Berekuso</p>
                <p>Phone: +233 999 9999</p>
                <p>Email: info@gabesfitness.com</p>
            </div>
            <div class="quick-links">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">FAQs</a></li>
                </ul>
            </div>
            <div class="social-media">
                <h3>Follow Us</h3>
                <ul>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
            
            
        </div>
        <p>&copy; <?php echo date("Y"); ?> Gabe's Fitness. All rights reserved.</p>
    </footer>
</body>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script src="../js/homepage.js"></script>
</html>

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
        <!-- page footer -->
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
                    <li>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512" width="25" height="25">
                                <path d="M480 257.35c0-123.7-100.3-224-224-224s-224 100.3-224 224c0 111.8 81.9 204.47 189 221.29V322.12h-56.89v-64.77H221V208c0-56.13 33.45-87.16 84.61-87.16 24.51 0 50.15 4.38 50.15 4.38v55.13H327.5c-27.81 0-36.51 17.26-36.51 35v42h62.12l-9.92 64.77H291v156.54c107.1-16.81 189-109.48 189-221.31z" fill="rgb(0, 47, 128)" fill-rule="evenodd" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <ion-icon name="logo-twitter" style="width:25px; height:23px; color:rgb(0, 47, 128);"></ion-icon>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <ion-icon name="logo-instagram" style="width:25px; height:23px; color:rgb(0, 47, 128);"></ion-icon>
                        </a>
                    </li>
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

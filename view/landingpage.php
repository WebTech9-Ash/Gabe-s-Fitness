<?php
include("../setting/connection.php");
include("../setting/core.php");
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
<body class="dark-mode">
    <header>
        <div class="container">
            <a class="logo"><img src="../assets/logo.png" id="logo" alt="logo"></a>
            <nav>
                <ul>
                    <li><a href="../view/homepage.php">Home</a></li>
                    <li><a href="../view/about_view.php">About Us</a></li>
                    <?php

                    if(isset($_SESSION["userId"])){


                    echo "<li><a href='../view/dashboard_view.php'>Dashboard</a></li>";
                    echo "<li><a href='../view/profile.php'>Profile</a></li>";
                    echo "<li><a href='../view/recommendations_view.php'>Recommendations</a></li>";

                    }

                    ?>

                    
                </ul>
            </nav>

            <?php

             if(isset($_SESSION['userId'])){

                echo "<div class='user-account'>
                    <button class='btn_logout' id='btn_logout'>Log out</button>
                </div>";

             }

             else{


                echo "<div class='user-account'>
                    <button class='btn_logout' id='btn_logout'>Log In</button>
                </div>";


             }

             ?>
                
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

                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512" width="25" height="25">
                                <path d="M496 109.5a201.8 201.8 0 01-56.55 15.3 97.51 97.51 0 0043.33-53.6 197.74 197.74 0 01-62.56 23.5A99.14 99.14 0 00348.31 64c-54.42 0-98.46 43.4-98.46 96.9a93.21 93.21 0 002.54 22.1 280.7 280.7 0 01-203-101.3A95.69 95.69 0 0036 130.4c0 33.6 17.53 63.3 44 80.7A97.5 97.5 0 0135.22 199v1.2c0 47 34 86.1 79 95a100.76 100.76 0 01-25.94 3.4 94.38 94.38 0 01-18.51-1.8c12.51 38.5 48.92 66.5 92.05 67.3A199.59 199.59 0 0139.5 405.6a203 203 0 01-23.5-1.4A278.68 278.68 0 00166.74 448c181.36 0 280.44-147.7 280.44-275.8 0-4.2-.11-8.4-.31-12.5A198.48 198.48 0 00496 109.5z" fill="rgb(0, 47, 128)"/>
                            </svg>

                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <ion-icon name="logo-instagram" style="width:25px; height:23px; color:rgb(0, 47, 128);"></ion-icon>
                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512" width="25" height="25">
                                <path d="M349.33 69.33a93.62 93.62 0 0193.34 93.34v186.66a93.62 93.62 0 01-93.34 93.34H162.67a93.62 93.62 0 01-93.34-93.34V162.67a93.62 93.62 0 0193.34-93.34h186.66m0-37.33H162.67C90.8 32 32 90.8 32 162.67v186.66C32 421.2 90.8 480 162.67 480h186.66C421.2 480 480 421.2 480 349.33V162.67C480 90.8 421.2 32 349.33 32z" fill="rgb(0, 47, 128)"/>
                                <path d="M377.33 162.67a28 28 0 1128-28 27.94 27.94 0 01-28 28zM256 181.33A74.67 74.67 0 11181.33 256 74.75 74.75 0 01256 181.33m0-37.33a112 112 0 10112 112 112 112 0 00-112-112z" fill="rgb(0, 47, 128)"/>
                            </svg>
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

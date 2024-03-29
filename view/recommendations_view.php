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
    <title> Lifestyle Recommendations </title>
    <link rel="stylesheet" href="../css/recommendations.css">
</head>

<body class="dark-mode">
    <div class="main_container">
        <header>
            <!-- header and navigation bar -->
            <div class="container">
                <a href="../view/homepage.php" class="logo"><img src="../assets/logo.png" id="logo" alt="logo"></a>
                <nav>
                <ul>
                    <li><a href="../view/homepage.php">Home</a></li>
                    <li><a href="../view/about_view.php">About Us</a></li>
                    <li><a href="../view/dashboard_view.php">Dashboard</a></li>
                    <li><a href="../view/profile.php">Profile</a></li>
                    <li><a href="../view/ManTrack.php">Tracker</a></li>
                    <li><a href="../view/add_class_session.php">Class Sessions</a></li>
                    <li><a href="../view/recommendations_view.php">Recommendations</a></li>
                </ul>
                </nav>
                <div class="user-account">
                    <button class="btn_logout" id="btn_logout">Log out</button>
                </div>
            </div>
        </header>

        <div class="hero_section" id="hero_section">
            <!-- Main Page Content -->
            <div class="title_container">
                <h1>Lifestyle Recommendations</h1>
                <div>
                    <img src="../assets/moon.png" id="toggle" alt="sun" width="30px" height="30px" onclick="toggleColorScheme()">
                </div>
            </div>

            <div class="recs_container">
                <h2> Fitness Trackers </h2>
                <div class="rec_scoller snaps-inline">
                    <div class="rec_element">
                        <div class="rec_header">
                            <div class="banner"></div>
                        </div>
                        <div class="rec_content">
                            <p> Google Fit</p>
                        </div>
                        <div class="rec_action">
                            <a href="https://www.google.com/fit/">Read more</a>
                        </div>
                    </div>

                    <div class="rec_element">
                        <div class="rec_header">
                            <div class="banner"></div>
                        </div>
                        <div class="rec_content">
                            <p> Oura Rings </p>
                        </div>
                        <div class="rec_action">
                            <a href="https://ouraring.com/">Read more</a>
                        </div>
                    </div>

                    <div class="rec_element">
                        <div class="rec_header">
                            <div class="banner"></div>
                        </div>
                        <div class="rec_content">
                            <p> Fit Bit </p>
                        </div>
                        <div class="rec_action">
                            <a href="https://www.fitbit.com/global/us/home">Read more</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="recs_container">
                <h2> Meditation Apps </h2>
                <div class="rec_scoller">
                    <div class="rec_element">
                        <div class="rec_header">
                            <div class="other_banner"></div>
                        </div>
                        <div class="rec_content">
                            <p> Calm </p>
                        </div>
                        <div class="rec_action">
                            <a href="https://www.calm.com/">Read more</a>
                        </div>
                    </div>               
                    <div class="rec_element">
                        <div class="rec_header">
                            <div class="other_banner"></div>
                        </div>
                        <div class="rec_content">
                            <p> Mindfulness App </p>
                        </div>
                        <div class="rec_action">
                            <a href="https://www.themindfulnessapp.com/">Read more</a>
                        </div>
                    </div>
                   
                    <div class="rec_element">
                        <div class="rec_header">
                            <div class="other_banner"></div>
                        </div>
                        <div class="rec_content">
                            <p> Headspace</p>
                        </div>
                        <div class="rec_action">
                            <a href="https://www.headspace.com">Read more</a>
                        </div>
                    </div>
                </div>               
            </div>

            <div class="recs_container">
                <h2> Supplements </h2>
                <div class="rec_scoller">
                    <div class="rec_element">
                        <div class="rec_header">
                            <div class="banner"></div>
                        </div>
                        <div class="rec_content">
                            <p> Momentous</p>
                        </div>
                        <div class="rec_action">
                            <a href="https://www.livemomentous.com/collections/protein">Read more</a>
                        </div>
                    </div>
                    <div class="rec_element">
                        <div class="rec_header">
                            <div class="banner"></div>
                        </div>
                        <div class="rec_content">
                            <p> Optimum Nutrition </p>
                        </div>
                        <div class="rec_action">
                            <a href="https://www.optimumnutrition.com/en-us">Read more</a>
                        </div>
                    </div>
                    <div class="rec_element">
                        <div class="rec_header">
                            <div class="banner"></div>
                        </div>
                        <div class="rec_content">
                            <p> Cellucor </p>
                        </div>
                        <div class="rec_action">
                            <a href="https://cellucor.com/collections/protein">Read more</a>
                        </div>
                    </div>
                    
                </div>              
            </div>

        </div>

        <footer>
            <!-- page footer -->
            <div class="footer_container">
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
    </div>   
</body>
<!-- Script connecting to ion icons -->
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="../js/recommendations.js"></script>
</html>

<?php
include("../setting/connection.php");
include("../setting/core.php");
isLogin();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/dashboard.css">
</head>

<body>
    <header>
        <!-- header and navigation bar -->
        <div class="container">
            <a href="#" class="logo"><img src="../assets/logo (2).png"></a>
            <nav>
                <ul>
                    <li><a href="../view/homepage.php">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="../view/dashboard_view.php">Dashboard</a></li>
                    <li><a href="#">Profile</a></li>
                    <li><a href="#">Activity</a></li>
                </ul>
            </nav>
            <div class="user-account">
                <button class="btn_logout" id="btn_logout">Log out</button>
            </div>
        </div>
    </header>

    <div class="overview" id="overview">
      <h1>Our Services</h1>
      <div class="services_wrapper">
        <div class="services_card">
          <h2>Data Access</h2>
          <div class="services_btn"><button>Get Started</button></div>
        </div>
        <div class="services_card">
          <h2>Analytics</h2>
          <div class="services_btn"><button>Get Started</button></div>
        </div>
        <div class="services_card">
          <h2>Goals</h2>
          <div class="services_btn"><button>Get Started</button></div>
        </div>
      </div>
    </div>

    <!-- Data Access -->
    <div class="data_access_section">
        <h1> Data Access </h1>
        <div class="data_summary">
            <div class="data_wrapper">
                <div class="card">
                    <div class="title">
                        <span> Workout </span>
                        <ion-icon name="walk-outline" style="width: 35px; height: 30px;"></ion-icon>
                    </div>
                    <span>
                        2   
                    </span>
                    <p>
                        <span> Workouts recorded</span>
                        <span> This week </span>                  
                    </p>
                </div>

                <div class="card">
                    <div class="title">
                        <span> Nutrition </span>
                        <ion-icon name="restaurant-outline" style="width: 35px; height: 30px;"></ion-icon>
                    </div>
                    <span>
                        3   
                    </span>
                    <p>
                        <span> Meals recorded </span>
                        <span> Today </span>                  
                    </p>
                </div>

                <div class="card">
                    <div class="title">
                        <span> Sleep </span>
                        <ion-icon name="alarm-outline" style="width: 35px; height: 30px;"></ion-icon>
                    </div>
                    <span>
                        3 hr 2 min  
                    </span>
                    <p>
                        <!-- <span> Meals recorded </span> -->
                        <span> Today </span>                  
                    </p>
                </div>
            </div>
        </div>

        <div class="data_graph">
            <!-- GRAPHS TO BE ADDED -->
        </div>
     
    </div>

    <!-- Analytics Section  -->


    <!-- Goals Section -->
    <div class="goals_section">
        <h1> Goals </h1>  
        <!-- Set goals -->
        <div class="setup">
            <form action="" method="POST" class="set_goal">
                
            </form>
        </div>

        <!-- Track goals -->
        <div class="tracking">

        </div>
    </div>

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
                                <path d="M480 257.35c0-123.7-100.3-224-224-224s-224 100.3-224 224c0 111.8 81.9 204.47 189 221.29V322.12h-56.89v-64.77H221V208c0-56.13 33.45-87.16 84.61-87.16 24.51 0 50.15 4.38 50.15 4.38v55.13H327.5c-27.81 0-36.51 17.26-36.51 35v42h62.12l-9.92 64.77H291v156.54c107.1-16.81 189-109.48 189-221.31z" fill="white" fill-rule="evenodd"/>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <ion-icon name="logo-twitter" style= "width:25px; height:23px; color:white;"></ion-icon>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <ion-icon name="logo-instagram" style= "width:25px; height:23px; color:white;"></ion-icon>
                        </a>
                    </li>
                </ul>
            </div>
            
            
        </div>
        <p>&copy; <?php echo date("Y"); ?> Gabe's Fitness. All rights reserved.</p>
    </footer>
</body>

<!-- Script connecting to ion icons -->
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</html>
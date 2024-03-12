<?php


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/dashboard.css">
</head>

<body class="dark-mode">
    <div class="main_container">
    <header>
        <!-- header and navigation bar -->
        <div class="container">
            <a href="#" class="logo"><img src="../assets/logo (2).png" id="logo" alt="logo"></a>
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
        <div class="container">
            <h1>Our Services</h1>
            <br>
            <img src="../assets/sun.png" id="toggle" alt="sun" width="30px" height="30px" onclick="toggleColorScheme()">
        </div>
        <div class="services_wrapper">
            <div class="services_card">
                <a href="#data_access_section">Data Access</a>
                <!-- <div class="services_btn"><button>Get Started</button></div> -->
            </div>
            <div class="services_card">
                <a href="#analytics_section">Analytics</a>
                <!-- <div class="services_btn"><button>Get Started</button></div> -->
            </div>
            <div class="services_card">
                <a href="#goals_section">Goals</a>
                <!-- <div class="services_btn"><button>Get Started</button></div> -->
            </div>
        </div>
    </div>

    <!-- Data Access -->
    <div class="data_access_section" id="data_access_section">
        <h1> Data Access </h1>
        <div class="data_summary">
            <h2> Recent Data </h2>
            <div class="data_wrapper">
                <div class="card" id="workout">
                    <div class="title">
                        <span> Workout </span>
                        <ion-icon name="walk-outline" style="width: 35px; height: 30px;"></ion-icon>
                    </div>
                    <span>
                        10
                    </span>
                    <p>
                        <span> Workouts recorded</span>
                        <span> This week </span>
                    </p>
                </div>

                <div class="card" id="nutrition">
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

                <div class="card" id="sleep">
                    <div class="title">
                        <span> Sleep </span>
                        <ion-icon name="alarm-outline" style="width: 35px; height: 30px;"></ion-icon>
                    </div>
                    <span>
                        3 hr 2 min
                    </span>
                    <p>
                        <span> Sleep recorded </span>
                        <span> Today </span>
                    </p>
                </div>

                <div class="card" id="weight">
                    <div class="title">
                        <span> Weight </span>
                        <ion-icon name="flame-outline" style="width: 35px; height: 30px;"></ion-icon>
                    </div>
                    <span>
                        52
                    </span>
                    <p>
                        <span> Current weight recorded </span>
                        <span> Today </span>
                    </p>
                </div>
            </div>
        </div>

        <div class="graph">
            <h2 id="weekly"> Weekly Data </h2>
            <div class="data_graph">
                <div class="graph_card">
                    <h2 class="graph_title"> Workout data </h2>
                    <div id="workout_bar_chart"></div>
                </div>
                <div class="graph_card">
                    <h2 class="graph_title"> Nutrition data </h2>
                    <div id="nutrition_bar_chart"></div>
                </div>
                <div class="graph_card">
                    <h2 class="graph_title"> Sleep data </h2>
                    <div id="sleep_bar_chart"></div>
                </div>
                <div class="graph_card">
                    <h2 class="graph_title"> Weight data </h2>
                    <div id="weight_bar_chart"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Analytics Section  -->
    <div class="analytics_section" id="analytics_section">
        <h1> Analytics </h1>
        <div class="container">
            <div class="data_trends">
                <div class="trend_card">
                    <h2 class="trend_title">Trend for Sleep </h2>
                    <div id="sleep_trend"></div>
                </div>
                <div class="insights">
                    <h3> You have met your sleep goal 6 times this month </h3>
                    <h3> Average sleep duration is 5hr and 30mins </h3>
                </div>
            </div>

            <div class="data_trends">
                <div class="trend_card">
                    <h2 class="trend_title">Trend for Weight </h2>
                    <div id="weight_trend"></div>
                </div>
                <div class="insights">
                    <h3> You have lost 2kg since the start of the month </h3>
                    <h3> Current weight is 51 kg  </h3>
                </div>
            </div>

            <div class="data_trends">
                <div class="trend_card">
                    <h2 class="trend_title">Trend for Caloric intake </h2>
                    <div id="caloric_trend"></div>
                </div>
                <div class="insights">
                    <h3> You have met your nutrition goal 2 times this month </h3>
                    <h3> Average caloric intake is 2000 kcal  </h3>
                </div>
            </div>

            <div class="data_trends">
                <div class="trend_card">
                    <h2 class="trend_title">Trend for Workouts </h2>
                    <div id="workout_trend"></div>
                </div>
                <div class="insights">
                    <h3> You exercised the most on Dec 02 </h3>
                    <h3> Average number of daily workouts is 3 times </h3>
                </div>
            </div>

        </div>
        

    </div>


    <!-- Goals Section -->
    <div class="goals_section" id="goals_section">
        <h1> Goals </h1>
        <!-- Set goals -->
        <div class="setup">
            <form action="" method="POST" class="set_goal">
                <h2> Set personal goals </h2>
                <!-- sleep goals -->
                <div class="goalbox">
                    <div class="icons">
                        <ion-icon name="alarm-outline" style="width: 35px; height:25px; color: var(--primary-color);"></ion-icon>
                    </div>
                    <label for="sleepHours"> Daily Sleep Goal (Hours per Day):</label>
                    <input type="number" id="sleepHours" name="sleepHours" placeholder="Enter hours of sleep per day" min="0" step="0.5" required>
                </div>

                <!-- calorie goal -->
                <div class="goalbox">
                    <div class="icons">
                        <ion-icon name="restaurant-outline" style="width: 35px; height: 25px; color: var(--primary-color);"></ion-icon>
                    </div>
                    <label for="calories">Daily Calorie Goal:</label>
                    <input type="number" id="calories" name="calories" placeholder="Enter daily calorie goal" min="0" required>
                </div>

                <!--  workout goal -->
                <div class="goalbox">
                    <div class="icons">
                        <ion-icon name="walk-outline" style="width: 35px; height:25px; color: var(--primary-color);"></ion-icon>
                    </div>
                    <label for="workoutsPerMonth">Monthly Workout Goal:</label>
                    <input type="number" id="workoutsPerMonth" name="workoutsPerMonth" placeholder="Enter number of workouts per month" min="0" required>
                </div>

                <!--  weight loss goal -->
                <div class="goalbox">
                    <div class="icons">
                        <ion-icon name="flame-outline" style="width: 35px; height:25px; color: var(--primary-color);"></ion-icon>
                    </div>
                    <label for="weightloss">Weight Loss Goal:</label>
                    <input type="number" id="weightloss" name="weightloss" placeholder="Enter goal weight" min="0" required>
                </div>

                <button type="submit" class="btn"> Set Goals </button>

            </form>
        </div>

        <!-- Track goals -->
        <div class="tracking">
            <h2> Track personal goals </h2>
            <div class="tracking_data">
                <div class="tracking_card">
                    <h3> Workouts </h3>
                    <div class="head">
                        <div>
                            <h2> 20 </h2>
                            <p> Workouts per month </p>
                        </div>
                        <ion-icon name="walk-outline" style="width: 35px; height: 30px; color: rgb(0, 128, 75);"></ion-icon>
                    </div>
                    <span class="progress" id="workoutprogress" data-value="60%"></span>
                    <span class="label">60%</span>
                </div>

                <div class="tracking_card">
                    <h3> Nutrition </h3>
                    <div class="head">
                        <div>
                            <h2> 3000 </h2>
                            <p> Calories per day </p>
                        </div>
                        <ion-icon name="restaurant-outline" style="width: 35px; height: 30px; color: rgb(0, 128, 75);"></ion-icon>
                    </div>
                    <span class="progress" data-value="50%"></span>
                    <span class="label">50%</span>
                </div>

                <div class="tracking_card">
                    <h3> Sleep </h3>
                    <div class="head">
                        <div>
                            <h2> 6 </h2>
                            <p> hrs per day </p>
                        </div>
                        <ion-icon name="alarm-outline" style="width: 35px; height: 30px; color: rgb(0, 128, 75);"></ion-icon>
                    </div>
                    <span class="progress" data-value="70%"></span>
                    <span class="label">70%</span>
                </div>

                <div class="tracking_card">
                    <h3> Weigth Loss</h3>
                    <div class="head">
                        <div>
                            <h2> 50 </h2>
                            <p> kilograms </p>
                        </div>
                        <ion-icon name="flame-outline" style="width: 35px; height: 30px; color: rgb(0, 128, 75);"></ion-icon>
                    </div>
                    <span class="progress" data-value="30%"></span>
                    <span class="label">30%</span>
                </div>

            </div>

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
<!-- Script for graphs -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.47.0/apexcharts.min.js" integrity="sha512-oM6gsyV28tHLTsSyakEjJ8TpRtYpjrbWQ9aBEPJIyS17LcEXltOVDaa/S9V+x9cxT9HKW+x3E39wqtYYDU1LXw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="../js/dashboard.js"></script>

</html>
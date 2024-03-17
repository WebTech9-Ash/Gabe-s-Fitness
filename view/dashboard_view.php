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

    <div class="overview" id="overview">
        <div class="container">
            <h1>Our Services</h1>
            <br>
            <img src="../assets/sun.png" id="toggle" alt="sun" width="30px" height="30px" onclick="toggleColorScheme()">
        </div>
        <div class="useroptions">
            <div class="recording">
                <h2> Record Your Fitness Data </h2>
                <button class="recording_button" id="recording_button" onclick="openRecording()"> Get Started </button>
            </div>
    
            <div class="admin_redirect">
                <h2> Gym Owner? </h2>
                <button> <a href = "../admin/management.php">Click Here<a> </button>
            </div>
        </div>
        <div class="services_wrapper">
            <div class="services_card">
                <button class="section_buttons" id="data_button" onclick="openDataAccess()">Data Access </button>
                <!-- <a href="#data_access_section">Data Access</a> -->
            </div>
            <div class="services_card">
                <button class="section_buttons" id="analytics_button" onclick="openAnalytics()">Analytics </button>
                <!-- <a href="#analytics_section">Analytics</a>   -->
            </div>
            <div class="services_card">
                <button class="section_buttons" id="goal_button" onclick="openGoals()">Goals </button>
                <!-- <a href="#goals_section">Goals</a> -->
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
                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512" width="25" height="25">
                                <path d="M496 109.5a201.8 201.8 0 01-56.55 15.3 97.51 97.51 0 0043.33-53.6 197.74 197.74 0 01-62.56 23.5A99.14 99.14 0 00348.31 64c-54.42 0-98.46 43.4-98.46 96.9a93.21 93.21 0 002.54 22.1 280.7 280.7 0 01-203-101.3A95.69 95.69 0 0036 130.4c0 33.6 17.53 63.3 44 80.7A97.5 97.5 0 0135.22 199v1.2c0 47 34 86.1 79 95a100.76 100.76 0 01-25.94 3.4 94.38 94.38 0 01-18.51-1.8c12.51 38.5 48.92 66.5 92.05 67.3A199.59 199.59 0 0139.5 405.6a203 203 0 01-23.5-1.4A278.68 278.68 0 00166.74 448c181.36 0 280.44-147.7 280.44-275.8 0-4.2-.11-8.4-.31-12.5A198.48 198.48 0 00496 109.5z" fill="rgb(0, 47, 128)"/>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#">
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
    </div>
    
</body>

<!-- Script connecting to ion icons -->
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<!-- Script for graphs -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.47.0/apexcharts.min.js" integrity="sha512-oM6gsyV28tHLTsSyakEjJ8TpRtYpjrbWQ9aBEPJIyS17LcEXltOVDaa/S9V+x9cxT9HKW+x3E39wqtYYDU1LXw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="../js/dashboard.js"></script>

</html>

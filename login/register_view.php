<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Register Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/register.css">
</head>

<body>
    <header> 
        <h2 class="logo"> Logo </h2>

        <div class="navbar_toggle" id="mobile_menu">
            <span class="bar"></span> 
            <span class="bar"></span>
            <span class="bar"></span>
        </div>

        <nav class="navigation_bar">
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Contact</a>
            <button class="btn_register">Sign Up</button>
        </nav>
    </header>

    <div class="form_container">
        <span class="close_icon">
            <ion-icon name="close"></ion-icon>
        </span>
        <div class="form_box">
            <h2>Register</h2>
            <form action="#" method="POST" name=register onsubmit="return validateForm()" id="register">
                <div class="input_box">
                    <span class="icons">
                        <ion-icon name="person"></ion-icon>
                    </span>
                    <!-- first name entry -->
                    <input type="text" name="fname" id="fname" pattern="[a-zA-Z]+([ '-][a-zA-Z]+)*" required>
                    <label for="fname">First Name</label>
                </div>

                <div class="input_box">
                    <span class="icons">
                        <ion-icon name="person"></ion-icon>
                    </span>
                    <!-- last name entry -->
                    <input type="text" name="lname" id="lname" pattern="[a-zA-Z]+([ '-][a-zA-Z]+)*" required>
                    <label for="lname">Last Name</label>
                </div>

                <div class="input_box">
                    <span class="icons">
                        <ion-icon name="mail"></ion-icon>
                    </span>
                    <!-- Email entry -->
                    <input type="text" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
                    <label for="email">Email</label>
                </div>

                <div class="columns">
                    <div class="column_box">
                        <!-- Date of Birth entry -->
                        <label for="email"> Date of Birth </label>
                        <div>
                            <input type="date" name="dob" id="dob" min="01/01/1900" max="01/02/2024" required> 
                        </div>
                    </div>

                    <div class="radio_gender">
                        <label> Gender </label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                            <label class="form-check-label" for="flexRadioDefault1">
                                Female
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioCheckedDefault2">
                            <label class="form-check-label" for="flexRadioCheckedDefault2">
                                Male
                            </label>
                        </div>
                    </div>  
                </div>

                <div class="body_info">
                    <div class="form-group">
                        <label for="height">Height (cm) </label>
                        <input type="number" class="form-control" id="height" name="height" min="0" max="300" step="0.1">
                    </div>

                    <div class="form-group">
                        <label for="weight">Weight (kg) </label>
                        <input type="number" class="form-control" id="weight" name="weight" min="0" max="500" step="0.01">
                    </div>
                </div>

                <div class="fit_info">
                    <label for="fit_level"> Fitness Level </label>
                    <select class="form-select form-select-sm" aria-label="Small select example" id="fit_level">
                        <option selected> Select fitness level </option>
                        <option value="1">Novice</option>
                        <option value="2">Intermediate</option>
                        <option value="3">Advanced</option>
                    </select>
                </div>

                <div class="fit_info">
                    <label for="fit_goal"> Fitness Goal </label>
                    <select class="form-select form-select-sm" aria-label="Small select example" id="fit_goal">
                        <option selected> Select fitness goal </option>
                        <option value="1"> Exercise </option>
                        <option value="2"> Weight Loss </option>
                        <option value="3"> Muscle Gain </option>
                        <option value="4"> Stamina Building </option>
                    </select>
                </div>

                <div class="fit_info">
                    <label for="fit_goal"> Health Conditions </label>
                    <select class="form-select form-select-sm" aria-label="Small select example" id="fit_goal">
                        <option selected> Select possible health conditions </option>
                        <option value="1"> Heart conditions </option>
                        <option value="2"> Respiratory conditions </option>
                        <option value="3"> Joint problems </option>
                        <option value="4"> Diabetes </option>
                        <option value="4"> Pregnancy </option>
                        <option value="4"> Not Applicable </option>
                    </select>
                </div>
               
                <div class="input_box">
                    <span class="icons">
                        <ion-icon name="lock-closed"></ion-icon>
                    </span>
                    <!-- Password entry -->
                    <input type="password" name="password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                    <label for="password">Password</label>
                </div>

                <div class="input_box">
                    <span class="icons">
                        <ion-icon name="lock-closed"></ion-icon>
                    </span>
                    <!-- Password re-entry -->
                    <input type="password" name="spassword" id="spassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                    <label for="spassword"> Confirm password </label>
                </div>

                <button type="submit" class="btn" name="register_btn ">Register</button>
                <div class="login">
                    <!-- login page link -->
                    <p> 
                        Already have an account?
                        <a href="login_view.php" class="login_link">Login</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="../js/register.js"></script>  

</html>
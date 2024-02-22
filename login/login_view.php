<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="../css/login.css">
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
            <button class="btn_login">Login</button>
        </nav>
    </header>
    
    <div class="form_container">
        <span class="close_icon">
            <ion-icon name="close"></ion-icon>
        </span>
        <div class="form_box">
            <h2>Login</h2>
            <form action="#" method="POST" name=login onsubmit="return validateForm()" id="login">

                <div class="input_box">
                    <span class="icons">
                        <ion-icon name="mail"></ion-icon>
                    </span>
                    <!-- Email entry -->
                    <input type="text" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
                    <label for="email">Email</label>
                </div>

                <div class="input_box">
                    <span class="icons">
                        <ion-icon name="lock-closed"></ion-icon>
                    </span>
                    <!-- Password entry -->
                    <input type="password" name="password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                    <label for="password">Password</label>
                </div> 

                <div class="remember">
                    <!-- remember me and forgot password link -->
                    <label for="check">
                        <input type="checkbox" name="check" id="check">
                        Remember Me
                    </label>
                    <a href="#">Forgot password?</a>
                </div>

                <!-- login button -->
                <button type="submit" class="btn" name="login_btn ">Login</button>

                <div class="register">
                    <!-- register page link -->
                    <p> 
                        Don't have an account?
                        <a href="register_view.php" class="reigster_link">Register Now</a>
                    </p>
                </div>
                
            </form>
        </div>
    </div>
    
</body>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="../js/login.js"> </script>
</html>
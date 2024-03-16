<?php

 include("../setting/connection.php");
 include("../setting/core.php");
 isLogin();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="../css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="light-mode">
    <header> 
        <img src="../assets/logo.png" id="logo" alt="logo">

        <div class="navbar_toggle" id="mobile_menu">
            <span class="bar"></span> 
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
        <nav class="navigation_bar">
            <a href="../view/homepage.php">Home</a>
            <a href="#">About</a>
            <button class="btn_login">Login</button>
        </nav>

        <img src="../assets/sun.png" id="toggle" alt="sun" onclick="toggleColorScheme()">
    </header>
    
    <div class="form_container">

    <?php

if(isset($_SESSION['loginFailed']) && $_SESSION['loginFailed'] === true) {
    echo "<div class='overlay'>
            <div class='popup'>
                <p>Wrong passsword password or username! Please try again.</p>
                <button onclick='closePopupun()'>OK</button>
            </div>
          </div>";

    unset($_SESSION["loginFailed"]);
}


    ?>
        <span class="close_icon">
            <ion-icon name="close"></ion-icon>
        </span>
        <div class="form_box">
            <h2>Login</h2>
            <form action="../action/login_action.php" method="post" name=login  id="login">

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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="../js/login.js"> </script>
</html>
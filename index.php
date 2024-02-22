<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
</head>
<body class="light-mode">

    <header> 
        <a href="#" class="logo"><img src="assets/logo (2).png" id="logo"></a>
        <ul>
            <li class="link"><a href="#">Home</a></li>
            <li class="link"><a href="#">About Us</a></li>
            <li class="link"><a href="login/register_view.php">Sign up</a></li>
            <li class="link"><a href="login/login_view.php">Login</a></li>
        </ul>
        <img src="assets/sun.png" id="toggle" alt="sun" onclick="toggleColorScheme()">
    </header>

    <section> 
        <div class="container text">
            <div class="text">
                <h2> Where Knowledge<br> Meets <span>Vitality</span></h2>
                <p>Welcome to our platform where we empower individuals with knowledge and vitality to achieve their goals and lead a fulfilling life.</p>
                <a href="#">Learn More</a>
            </div>
        </div>
        <div class="image">
            <img src="assets/pexels-marcus-chan-17898141-removebg-preview.png" class="man" alt=" "/>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 Gabe's Fitness. All rights reserved.</p>
    </footer>

    <script src="js/index.js">
        
    </script>

</body>
</html>

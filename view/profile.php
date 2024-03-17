<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/profile.css">
   
</head>
<body class="dark-mode">

<header>
    <div class="logo-container">
        <a href="../view/homepage.php" class="logo"><img src="../assets/logo.png" id="logo"></a>
    </div>
    <nav>
        <ul>
            <li><a href="../view/homepage.php">Home</a></li>
            <li><a href="../view/about_view.php">About Us</a></li>
            <li><a href="../view/dashboard_view.php">Dashboard</a></li>
            <li><a href="../view/profile.php">Profile</a></li>
            <li><a href="../view/ManTrack.php">Tracker</a></li>
            <li><a href="../view/add_class_session.php">Add Class Session</a></li>
            <li><a href="../view/recommendations_view.php">Recommendations</a></li>
        </ul>
    </nav>
    <div class="user-account">
        <button class="btn_logout" id="btn_logout">Log out</button>
    </div>
    <img src="../assets/sun.png" id="toggle" alt="sun" onclick="toggleColorScheme()">
</header>

<div class="container">
    <div class="profile">
        <div class="profile-info">
            <div class="user-avatar">
                <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="">
            </div>
            <div class="user-details">
                <h1 id="first-name">Kofi</h1>
                <h1 id="last-name">Mensah</h1>
                <p id="description">Fitness Trainer</p>
                <p id="location">Accra</p>
                <p id="bio">I'm a Fitness Coach that likes...</p>
                <button id="edit-profile">Edit</button>
            </div>
        </div>
    </div>
    <div class="edit-profile" id="edit-profile-form" style="display:none;">
        <form>
            <h1 style="font-size: 50px; color:green">Edit Profile</h1>
            <label for="first-name">First Name:</label>
            <input type="text" id="first-name" name="first-name">
            <label for="last-name">Last Name:</label>
            <input type="text" id="last-name" name="last-name">
            <label for="description">Description:</label>
            <input type="text" id="description" name="description">
            <label for="location">Location:</label>
            <input type="text" id="location" name="location">
            <label for="bio">Bio:</label>
            <input type="text" id="bio" name="bio">
            <button id="save-changes">Save Changes</button>
        </form>
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

<script>
    function toggleColorScheme() {
        const body = document.body;
        body.classList.toggle('light-mode');
        body.classList.toggle('dark-mode');

        // Toggle logo image source
        const logo = document.getElementById('logo');
        if (body.classList.contains('dark-mode')) {
            logo.src = '../assets/logo (2).png'; // Change to dark mode logo
            document.getElementById('toggle').src = '../assets/sun.png'; // Change toggle image to moon
        } else {
            logo.src = '../assets/blogo.png'; // Change back to light mode logo
            document.getElementById('toggle').src = '../assets/moon.png'; // Change toggle image to sun
        }
    }

    document.addEventListener("DOMContentLoaded", function() {
        const editButton = document.getElementById('edit-profile');
        const editForm = document.getElementById('edit-profile-form');

        editButton.addEventListener('click', () => {
            editForm.style.display = 'block'; // Show the form
        });
    });
</script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>

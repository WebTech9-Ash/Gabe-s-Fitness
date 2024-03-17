<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym Management</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/ManTrack.css">
</head>
<body class="light-mode">

<header>
    <div class="logo-container">
        <a href="../view/homepage.php" class="logo"><img src="../assets/blogo.png" id="logo"></a>
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
    <img src="../assets/moon.png" id="toggle" alt="moon" onclick="toggleColorScheme()">
</header>

<div class="container">
    <!-- Member Management Section -->
    <div class="management-section">
        <h2 style="color: green">Member Management</h2>
        <form id="member-form" action="../action/gym_membership_action.php" method="POST">
            <label for="gym">Select Gym:</label>
            <select id='gym-select' name='gym-select'>
            <?php include '../admin/gym_select.php'; ?>
            <br>
            <input id="register-member" type="submit" value="Register">
        </form>
        <div id="member-list">
            <!-- Member profiles will be displayed here -->
    </div>
</div>


    <!-- Attendance Tracking Section -->
    <div class="attendance-section">
        <h2 style="color: green">Attendance Tracking</h2>
        <form id="attendance-form">
            <label for="member-id">Member ID:</label>
            <input type="text" id="member-id" name="member-id">
            <br>
            <button id="record-attendance">Record Attendance</button>
        </form>
        <div id="attendance-report">
            <!-- Attendance report will be displayed here -->
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

<script>
    function toggleColorScheme() {
        const body = document.body;
        body.classList.toggle('light-mode');
        body.classList.toggle('dark-mode');

         // Toggle logo image source
         const logo = document.getElementById('logo');
        if (body.classList.contains('dark-mode')) {
            logo.src = 'logo (2).png'; // Change to dark mode logo
            document.getElementById('toggle').src = 'sun.png'; // Change toggle image to moon
        } else {
            logo.src = 'blogo.png'; // Change back to light mode logo
            document.getElementById('toggle').src = 'moon.png'; // Change toggle image to sun
        }
    }
    // Member Management Functionality
    document.getElementById('register-member').addEventListener('click', function(event) {
        //event.preventDefault();

        // Get member details from the form
        const name = document.getElementById('member-name').value;
        const email = document.getElementById('member-email').value;
        const phone = document.getElementById('member-phone').value;

        // Create a new member profile
        const memberProfile = document.createElement('div');
        memberProfile.classList.add('member-profile');
        memberProfile.innerHTML = `
            <p>Name: ${name}</p>
            <p>Email: ${email}</p>
            <p>Phone: ${phone}</p>
            <button class="update-member">Update</button>
            <button class="cancel-membership">Cancel Membership</button>
        `;

        // Append the new member profile to the member list
        document.getElementById('member-list').appendChild(memberProfile);

        // Clear the form fields
        document.getElementById('member-name').value = '';
        document.getElementById('member-email').value = '';
        document.getElementById('member-phone').value = '';
    });

    // Attendance Tracking Functionality
    document.getElementById('record-attendance').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent form submission

        // Get member ID from the form
        const memberId = document.getElementById('member-id').value;

        // Record the attendance for the member with the given ID
        const attendanceRecord = document.createElement('div');
        attendanceRecord.classList.add('attendance-record');
        attendanceRecord.innerHTML = `
            <p>Member ID: ${memberId}</p>
            <p>Attendance Recorded</p>
        `;

        // Append the attendance record to the attendance report
        document.getElementById('attendance-report').appendChild(attendanceRecord);

        // Clear the member ID field
        document.getElementById('member-id').value = '';
    });
</script>

</body>
</html>

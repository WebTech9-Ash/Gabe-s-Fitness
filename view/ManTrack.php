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
        <a href="#" class="logo"><img src="../assets/blogo.png" id="logo"></a>
    </div>
    <nav>
        
        <ul>
                    <li><a href="../view/homepage.php">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="../view/dashboard_view.php">Dashboard</a></li>
                    <li><a href="../view/profile.php">Profile</a></li>
                    <li><a href="../view/ManTrack.php">Tracker</a></li>
                    <li><a href="../view/inventoryMan.php">Inventory</a></li>
                    <li><a href="../view/recommendations_view.php">Activity</a></li>
        </ul>
    </nav>
    <img src="../assets/moon.png" id="toggle" alt="moon" onclick="toggleColorScheme()">
</header>

<div class="container">
    <!-- Member Management Section -->
    <div class="management-section">
        <h2 style="color: green">Member Management</h2>
        <form id="member-form">
            <label for="member-name">Name:</label>
            <input type="text" id="member-name" name="member-name">
            <label for="member-email">Email:</label>
            <input type="email" id="member-email" name="member-email">
            <label for="member-phone">Phone:</label>
            <input type="tel" id="member-phone" name="member-phone">
            <br>
            <button id="register-member">Register</button>
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
        event.preventDefault(); // Prevent form submission

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

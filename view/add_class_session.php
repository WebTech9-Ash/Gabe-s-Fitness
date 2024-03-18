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
    <title>Gym Management</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/ManTrack.css">
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
            <li><a href="../view/add_class_session.php">Class Sessions</a></li>
            <li><a href="../view/recommendations_view.php">Recommendations</a></li>
        </ul>
    </nav>
    <img src="../assets/sun.png" id="toggle" alt="moon" onclick="toggleColorScheme()">
</header>

<div class="container">
    <!-- Class Session Management Section -->
    <div class="management-section">
        <h2 style="color: green">Class Session Management</h2>
        <form id="class-session-form" action="../action/add_class_session_action.php" method="post">
            <label for="ClassType">Class Type:</label>
            <select id="class-type" name="class-type">
                <option value="Cardio">Cardio</option>
                <option value="Strength Training">Strength Training</option>
                <option value="Yoga">Yoga</option>
                <option value="Pilates">Pilates</option>
                <option value="Zumba">Zumba</option>
            </select>
            <label for="ClassName">Class Name:</label>
            <input type="text" id="class-name" name="class-name">
            <label for="StartTime">Start Time:</label>
            <input type="datetime-local" id="start-time" name="start-time">
            <label for="end-time">End Time:</label>
            <input type="datetime-local" id="end-time" name="end-time">
            <label for="MaxCapacity">Max Capacity:</label>
            <input type="number" id="max-capacity" name="max-capacity" min="1">
            <label for="Description">Description:</label>
            <textarea id="description" name="description"></textarea>
            <br>
            <button type="submit" name = "add-class-session" id="add-class-session">Add Class Session</button>
        </form>

        <!-- Display created class sessions -->
        <div id="class-sessions-list"></div>

        <!-- Edit Class Session Form -->
        <form id="edit-form" action="../action/edit_class_session_action.php" method="post" style="display: none;">
            <h2 style="color: blue;">Edit Class Session</h2>
            <label for="edit-class-id">Class ID:</label>
            <input type="text" id="edit-class-id" name="edit-class-id" readonly>
            <!-- Add fields to edit -->
            <button type="submit" name="confirm-edit" id="confirm-edit">Confirm Edit</button>
            <button type="button" id="cancel-edit">Cancel</button>
        </form>

        <!-- Delete Class Session Form -->
        <form id="delete-form" action="../action/delete_class_session_action.php" method="post" style="display: none;">
            <h2 style="color: red;">Delete Class Session</h2>
            <label for="delete-class-id">Class ID:</label>
            <input type="text" id="delete-class-id" name="delete-class-id" readonly>
            <p>Are you sure you want to delete this class session?</p>
            <button type="submit" name="confirm-delete" id="confirm-delete">Confirm Delete</button>
            <button type="button" id="cancel-delete">Cancel</button>
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
            logo.src = '../assets/logo.png'; // Change to dark mode logo
            document.getElementById('toggle').src = '../assets/sun.png'; // Change toggle image to moon
        } else {
            logo.src = '../assets/blogo.png'; // Change back to light mode logo
            document.getElementById('toggle').src = '../assets/moon.png'; // Change toggle image to sun
        }
    }
    
    // Function to create a class session element
    function createClassSessionElement(classSession) {
        const classSessionElement = document.createElement('div');
        classSessionElement.classList.add('class-session');
        classSessionElement.innerHTML = `
            <h3>${classSession.className}</h3>
            <p><strong>Class Type:</strong> ${classSession.classType}</p>
            <p><strong>Start Time:</strong> ${classSession.startTime}</p>
            <p><strong>End Time:</strong> ${classSession.endTime}</p>
            <p><strong>Max Capacity:</strong> ${classSession.maxCapacity}</p>
            <p><strong>Description:</strong> ${classSession.description}</p>
            <button class="edit-class" data-class-id="${classSession.id}">Edit</button>
            <button class="delete-class" data-class-id="${classSession.id}">Delete</button>
        `;
        return classSessionElement;
    }

    // Function to display class sessions
    function displayClassSessions(classSessions) {
        const classSessionsList = document.getElementById('class-sessions-list');
        classSessionsList.innerHTML = '';
        classSessions.forEach(classSession => {
            const classSessionElement = createClassSessionElement(classSession);
            classSessionsList.appendChild(classSessionElement);
        });
    }

    // Edit Class Session Button Click Event
    document.addEventListener('click', function(event) {
        if (event.target.classList.contains('edit-class')) {
            const classId = event.target.getAttribute('data-class-id');
            const classSessionToEdit = sampleClassSessions.find(session => session.id == classId);
            document.getElementById('edit-class-id').value = classId;
            // Populate edit form fields with class session data
            // Assuming you have fields with IDs for editing
            document.getElementById('edit-class-type').value = classSessionToEdit.classType;
            document.getElementById('edit-class-name').value = classSessionToEdit.className;
            document.getElementById('edit-start-time').value = classSessionToEdit.startTime;
            document.getElementById('edit-end-time').value = classSessionToEdit.endTime;
            document.getElementById('edit-max-capacity').value = classSessionToEdit.maxCapacity;
            document.getElementById('edit-description').value = classSessionToEdit.description;
            // Show the edit form
            document.getElementById('edit-form').style.display = 'block';
        }
    });

    // Cancel Edit Button Click Event
    document.getElementById('cancel-edit').addEventListener('click', function(event) {
        event.preventDefault();
        // Hide the edit form
        document.getElementById('edit-form').style.display = 'none';
    });

    // Delete Class Session Button Click Event
    document.addEventListener('click', function(event) {
        if (event.target.classList.contains('delete-class')) {
            const classId = event.target.getAttribute('data-class-id');
            document.getElementById('delete-class-id').value = classId;
            // Show the delete form
            document.getElementById('delete-form').style.display = 'block';
        }
    });

    // Cancel Delete Button Click Event
    document.getElementById('cancel-delete').addEventListener('click', function(event) {
        event.preventDefault();
        // Hide the delete form
        document.getElementById('delete-form').style.display = 'none';
    });
</script>
</body>
</html>

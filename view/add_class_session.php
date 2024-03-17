<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym Management</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/ManTrack.css">
    <style>
        #edit-form {
            display: none;
        }
    </style>
</head>
<body class="light-mode">

<header>
    <div class="logo-container">
        <a href="#" class="logo"><img src="../assets/blogo.png" id="logo"></a>
    </div>
    <nav>
        <ul>
            <li><a href="../view/homepage.php">Home</a></li>
            <li><a href="../view/about_view.php">About Us</a></li>
            <li><a href="../view/dashboard_view.php">Dashboard</a></li>
            <li><a href="../view/profile.php">Profile</a></li>
            <li><a href="../view/ManTrack.php">Tracker</a></li>
            <li><a href="../view/add_class_session.php">Class Sessions</a></li>
            <li><a href="../view/recommendations_view.php">Activity</a></li>
        </ul>
    </nav>
    <img src="../assets/moon.png" id="toggle" alt="moon" onclick="toggleColorScheme()">
</header>

<div class="container">
    <!-- Class Session Management Section -->
    <div class="management-section">
        <h2 style="color: green">Class Session Management</h2>
        <form id="class-session-form">
            <label for="class-type">Class Type:</label>
            <select id="class-type" name="class-type">
                <option value="Cardio">Cardio</option>
                <option value="Strength Training">Strength Training</option>
                <option value="Yoga">Yoga</option>
                <option value="Pilates">Pilates</option>
                <option value="Zumba">Zumba</option>
            </select>
            <label for="class-name">Class Name:</label>
            <input type="text" id="class-name" name="class-name">
            <label for="start-time">Start Time:</label>
            <input type="datetime-local" id="start-time" name="start-time">
            <label for="end-time">End Time:</label>
            <input type="datetime-local" id="end-time" name="end-time">
            <label for="max-capacity">Max Capacity:</label>
            <input type="number" id="max-capacity" name="max-capacity" min="1">
            <label for="description">Description:</label>
            <textarea id="description" name="description"></textarea>
            <br>
            <button id="add-class-session">Add Class Session</button>
            <button id="delete-class-session">Delete Class Session</button>
            <button id="edit-class-session">Edit Class Session</button>
        </form>
        
        <!-- Edit Class Session Form -->
        <form id="edit-form">
            <h2 style="color: blue;">Edit Class Session</h2>
            <label for="edit-class-type">Class Type:</label>
            <select id="edit-class-type" name="edit-class-type">
                <option value="Cardio">Cardio</option>
                <option value="Strength Training">Strength Training</option>
                <option value="Yoga">Yoga</option>
                <option value="Pilates">Pilates</option>
                <option value="Zumba">Zumba</option>
            </select>
            <label for="edit-class-name">Class Name:</label>
            <input type="text" id="edit-class-name" name="edit-class-name">
            <label for="edit-start-time">Start Time:</label>
            <input type="datetime-local" id="edit-start-time" name="edit-start-time">
            <label for="edit-end-time">End Time:</label>
            <input type="datetime-local" id="edit-end-time" name="edit-end-time">
            <label for="edit-max-capacity">Max Capacity:</label>
            <input type="number" id="edit-max-capacity" name="edit-max-capacity" min="1">
            <label for="edit-description">Description:</label>
            <textarea id="edit-description" name="edit-description"></textarea>
            <br>
            <button id="save-edit">Save Changes</button>
            <button id="cancel-edit">Cancel</button>
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
            logo.src = 'logo (2).png'; // Change to dark mode logo
            document.getElementById('toggle').src = 'sun.png'; // Change toggle image to moon
        } else {
            logo.src = 'blogo.png'; // Change back to light mode logo
            document.getElementById('toggle').src = 'moon.png'; // Change toggle image to sun
        }
    }
    
    // Class Session Management Functionality
    document.getElementById('add-class-session').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent form submission

        // Get class session details from the form
        const classType = document.getElementById('class-type').value;
        const className = document.getElementById('class-name').value;
        const startTime = document.getElementById('start-time').value;
        const endTime = document.getElementById('end-time').value;
        const maxCapacity = document.getElementById('max-capacity').value;
        const description = document.getElementById('description').value;

        // Send data to the server for insertion into the database
        // Example using fetch API:
        fetch('add_class_session_action.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                classType: classType,
                className: className,
                startTime: startTime,
                endTime: endTime,
                maxCapacity: maxCapacity,
                description: description
            })
        })
        .then(response => response.json())
        .then(data => {
            // Handle response from the server
            console.log(data);
            // Optionally, you can display a message to the user indicating success or failure
        })
        .catch(error => {
            console.error('Error:', error);
            // Handle errors
        });

        // Clear the form fields
        document.getElementById('class-name').value = '';
        document.getElementById('start-time').value = '';
        document.getElementById('end-time').value = '';
        document.getElementById('max-capacity').value = '';
        document.getElementById('description').value = '';
    });

    document.getElementById('delete-class-session').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent form submission
        // Add functionality to delete class session
        // You can send a request to the server to delete the selected class session
        // Example using fetch API:
        fetch('delete_class_action.php', {
            method: 'DELETE',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                // Include any data needed to identify the session to delete
            })
        })
        .then(response => response.json())
        .then(data => {
            // Handle response from the server
            console.log(data);
            // Optionally, you can display a message to the user indicating success or failure
        })
        .catch(error => {
            console.error('Error:', error);
            // Handle errors
        });
    });

    document.getElementById('update-class-session').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent form submission
        // Add functionality to update class session
        // You can send a request to the server to update the selected class session
        // Example using fetch API:
        fetch('edit_class_session_action.php', {
            method: 'PUT',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                // Include any data needed to identify the session to update
                // Include updated data for the session
            })
        })
        .then(response => response.json())
        .then(data => {
            // Handle response from the server
            console.log(data);
            // Optionally, you can display a message to the user indicating success or failure
        })
        .catch(error => {
            console.error('Error:', error);
            // Handle errors
        });
    });
    
    document.getElementById('edit-class-session').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent form submission
        // Show the edit form
        document.getElementById('edit-form').style.display = 'block';
    });
    
    document.getElementById('cancel-edit').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent form submission
        // Hide the edit form
        document.getElementById('edit-form').style.display = 'none';
    });
</script>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipment Management</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/inventoryMan.css">
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
    <img src="moon.png" id="toggle" alt="sun" onclick="toggleColorScheme()">
</header>

<div class="container">
    <!-- Equipment Inventory Section -->
    <div class="inventory-section">
        <h2 style="color: green">Equipment Inventory</h2>
        <form id="inventory-form">
            <label for="equipment-name">Equipment Name:</label>
            <input type="text" id="equipment-name" name="equipment-name">
            <label for="availability">Availability:</label>
            <select id="availability" name="availability">
                <option value="available">Available</option>
                <option value="not-available">Not Available</option>
            </select>
            <label for="maintenance-schedule">Maintenance Schedule:</label>
            <input type="text" id="maintenance-schedule" name="maintenance-schedule">
            <br>
            <button id="add-equipment">Add Equipment</button>
        </form>
        <table id="inventory-table">
            <thead>
                <tr>
                    <th>Equipment Name</th>
                    <th>Availability</th>
                    <th>Maintenance Schedule</th>
                </tr>
            </thead>
            <tbody>
                <!-- Equipment details will be displayed here -->
            </tbody>
        </table>
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

    document.getElementById('add-equipment').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent form submission

        // Get equipment details from the form
        const name = document.getElementById('equipment-name').value;
        const availability = document.getElementById('availability').value;
        const maintenanceSchedule = document.getElementById('maintenance-schedule').value;

        // Create a new table row for the equipment
        const newRow = document.createElement('tr');
        newRow.innerHTML = `
            <td>${name}</td>
            <td>${availability}</td>
            <td>${maintenanceSchedule}</td>
        `;

        // Append the new row to the inventory table
        document.querySelector('#inventory-table tbody').appendChild(newRow);

        // Clear the form fields
        document.getElementById('equipment-name').value = '';
        document.getElementById('availability').value = 'available';
        document.getElementById('maintenance-schedule').value = '';
    });

    // Add event listeners and functionality for usage tracking and maintenance history forms
</script>

</body>
</html>

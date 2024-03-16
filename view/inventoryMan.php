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
        <a href="#" class="logo"><img src="blogo.png" id="logo"></a>
    </div>
    <nav>
        <ul>
                    <li><a href="../view/homepage.php">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="../view/dashboard_view.php">Dashboard</a></li>
                    <li><a href="../view/profile.php">Profile</a></li>
                    <li><a href="../view/ManTrack.php">Tracker</a></li>
                    <li><a href="../view/inventoryManagement.php">Profile</a></li>
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

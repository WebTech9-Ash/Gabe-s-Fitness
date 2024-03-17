<?php
include '../setting/connection.php';

$query = "SELECT GymID, GymName FROM Gyms";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    echo "<select id='dropdown' name='gym-select'>";
    echo "<option value=''>Select a gym</option>";
    
    while($row = $result->fetch_assoc()) {
        echo "<option value='" . $row["GymID"] . "'>" . $row["GymName"] . "</option>";
    }

    echo "</select>";

    
} else {
    echo "No options available";
}

$conn->close();

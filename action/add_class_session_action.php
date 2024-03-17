<?php
// Include your database connection file
include '../setting/connection.php';

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the POST data
    $classType = $_POST['ClassType'];
    $className = $_POST['ClassName'];
    $startTime = $_POST['StartTime'];
    $endTime = $_POST['EndTime'];
    $maxCapacity = $_POST['MaxCapacity'];
    $description = $_POST['Description'];

    // Prepare SQL statement to insert data into the database
    $sql = "INSERT INTO ClassSessions (class_type, class_name, start_time, end_time, max_capacity, description) 
            VALUES ('$ClassType', '$ClassName', '$StartTime', '$EndTime', '$MaxCapacity', '$Description')";

    // Execute the SQL statement
    if (mysqli_query($conn, $sql)) {
        // Return a success message (you can customize this as needed)
        $response = array('success' => true, 'message' => 'Class session added successfully.');
        echo json_encode($response);
    } else {
        // Return an error message if insertion fails
        $response = array('success' => false, 'message' => 'Error adding class session: ' . mysqli_error($conn));
        echo json_encode($response);
    }
} else {
    // Return an error message if the request method is not POST
    $response = array('success' => false, 'message' => 'Invalid request method.');
    echo json_encode($response);
}

// Close the database connection
mysqli_close($conn);
?>

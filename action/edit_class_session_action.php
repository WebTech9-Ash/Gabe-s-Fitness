<?php
// Include your database connection file
include '../setting/connection.php';

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the POST data
    $sessionId = $_POST['sessionId']; 
    $classType = $_POST['classType'];
    $className = $_POST['className'];
    $startTime = $_POST['startTime'];
    $endTime = $_POST['endTime'];
    $maxCapacity = $_POST['maxCapacity'];
    $description = $_POST['description'];

    // Prepare SQL statement to update data in the database
    $sql = "UPDATE class_sessions 
            SET class_type='$classType', class_name='$className', start_time='$startTime', end_time='$endTime', 
                max_capacity='$maxCapacity', description='$description' 
            WHERE id='$sessionId'";

    // Execute the SQL statement
    if (mysqli_query($conn, $sql)) {
        // Return a success message (you can customize this as needed)
        $response = array('success' => true, 'message' => 'Class session updated successfully.');
        echo json_encode($response);
    } else {
        // Return an error message if update fails
        $response = array('success' => false, 'message' => 'Error updating class session: ' . mysqli_error($conn));
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

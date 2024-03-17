<?php
// Include your database connection file
include '../setting/connection.php';

// Check if the form is submitted
if (isset($_POST['edit-class-id'])) {
    // Get the POST data
    $classType = $_POST['classType'];
    $className = $_POST['className'];
    $startTime = $_POST['startTime'];
    $endTime = $_POST['endTime'];
    $maxCapacity = $_POST['maxCapacity'];
    $description = $_POST['description'];

    // Prepare SQL statement to insert data into the database
    $sql = "INSERT INTO ClassSessions (class_type, class_name, start_time, end_time, max_capacity, description) 
            VALUES (?, ?, ?, ?, ?, ?)";

    // Prepare the statement
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ssssss", $classType, $className, $startTime, $endTime, $maxCapacity, $description);

    // Execute the statement
    if (mysqli_stmt_execute($stmt)) {
        // Return a success message
        $response = array('success' => true, 'message' => 'Class session added successfully.');
        echo json_encode($response);
    } else {
        // Return an error message if insertion fails
        $response = array('success' => false, 'message' => 'Error adding class session: ' . mysqli_error($conn));
        echo json_encode($response);
    }

    // Close the prepared statement
    mysqli_stmt_close($stmt);
} else {
    // Return an error message if the form is not submitted
    $response = array('success' => false, 'message' => 'Form not submitted.');
    echo json_encode($response);
}

// Close the database connection
mysqli_close($conn);
?>

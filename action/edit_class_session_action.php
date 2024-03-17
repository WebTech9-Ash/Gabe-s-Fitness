<?php
// Include your database connection file
include '../setting/connection.php';

// Check if the form is submitted
if (isset($_POST['confirm-edit'])) {
    // Get the POST data
    $classType = $_POST['ClassType'];
    $className = $_POST['ClassName'];
    $startTime = $_POST['StartTime'];
    $endTime = $_POST['EndTime'];
    $maxCapacity = $_POST['MaxCapacity'];
    $description = $_POST['Description'];

    // Prepare SQL statement to insert data into the database
    $sql = "INSERT INTO ClassSessions (ClassType, ClassName, StartTime, EndTime, MaxCapacity, Description) 
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

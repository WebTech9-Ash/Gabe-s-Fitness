<?php
// Include your database connection file
include '../setting/connection.php';

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the POST data
    $SessionID = $_POST['SessionID']; 

    // Prepare SQL statement to delete data from the database
    $sql = "DELETE FROM ClassSessions WHERE id='$SessionID'";

    // Execute the SQL statement
    if (mysqli_query($conn, $sql)) {
        // Return a success message (you can customize this as needed)
        $response = array('success' => true, 'message' => 'Class session deleted successfully.');
        echo json_encode($response);
    } else {
        // Return an error message if deletion fails
        $response = array('success' => false, 'message' => 'Error deleting class session: ' . mysqli_error($conn));
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

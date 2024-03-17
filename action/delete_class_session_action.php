<?php
// Include the connection file
include "../setting/connection.php";

// Check for the GET URL parameter
if (isset($_GET['id'])) {
    // Retrieve the class session ID from the GET URL
    $sessionId = $_GET['id'];

    // Write the DELETE query using the connection from the connection file
    $deleteQuery = "DELETE FROM ClassSessions WHERE id = ?";

    // Prepare the delete statement
    $stmt = $conn->prepare($deleteQuery);
    $stmt->bind_param("i", $sessionId);

    // Execute the statement
    if ($stmt->execute()) {
        // Redirect to the class session display page
        header("Location: ../view/add_class_session.php");
        exit();
    } else {
        // Display error on class session display page if deletion fails
        echo "Error: " . $stmt->error;
        // You may redirect to class session display page with an error message if needed
    }

    // Close the prepared statement
    $stmt->close();
} else {
    // Redirect to class session display page if class session ID is not provided
    header("Location: ../view/add_class_session.php");
    exit();
}
?>

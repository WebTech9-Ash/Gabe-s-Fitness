<?php
// Include the connection file
include "../setting/connection.php";

// Delete Class Session
if (isset($_POST['delete-class-session'])) {
    $ClassSessionID = isset($_POST['delete-class-id']) ? $_POST['delete-class-id'] : '';

    // Delete the class session
    $deleteQuery = "DELETE FROM ClassSessions WHERE SessionID=?";
    $stmtDelete = $conn->prepare($deleteQuery);
    $stmtDelete->bind_param("i", $ClassSessionID);

    if ($stmtDelete->execute()) {
        // Redirect back to the class session page after a successful delete
        header("Location: ../view/class_session.php");
        exit();
    } else {
        // Redirect back to the form with an error message
        header("Location: ../view/class_session.php?msg=error");
        exit();
    }

    // Close the prepared statement
    $stmtDelete->close();
}

// Fetch Class Sessions
$selectQuery = "SELECT * FROM ClassSessions";
$result = $conn->query($selectQuery);
$classSessions = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $classSessions[] = $row;
    }
}
?>
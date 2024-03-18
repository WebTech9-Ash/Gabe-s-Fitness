<?php
// Include your database connection file
include '../setting/connection.php';

// Edit Class Session
if (isset($_POST['edit-class-session'])) {
    $ClassSessionID = isset($_POST['edit-class-id']) ? $_POST['edit-class-id'] : '';
    $ClassName = isset($_POST['edit-class-name']) ? $_POST['edit-class-name'] : '';
    $ScheduleStartDateTime = isset($_POST['edit-start-time']) ? $_POST['edit-start-time'] : '';
    $ScheduleEndDateTime = isset($_POST['edit-end-time']) ? $_POST['edit-end-time'] : '';
    $MaxCapacity = isset($_POST['edit-max-capacity']) ? $_POST['edit-max-capacity'] : '';
    $Description = isset($_POST['edit-description']) ? $_POST['edit-description'] : '';
    $ClassType = isset($_POST['edit-class-type']) ? $_POST['edit-class-type'] : '';

    // Update the class session
    $updateQuery = "UPDATE ClassSessions SET ClassName=?, ScheduleStartDateTime=?, ScheduleEndDateTime=?, MaxCapacity=?, Description=?, ClassType=? WHERE SessionID=?";
    $stmtUpdate = $conn->prepare($updateQuery);
    $stmtUpdate->bind_param("ssssssi", $ClassName, $ScheduleStartDateTime, $ScheduleEndDateTime, $MaxCapacity, $Description, $ClassType, $ClassSessionID);

    if ($stmtUpdate->execute()) {
        // Redirect back to the class session page after a successful edit
        header("Location: ../view/class_session.php");
        exit();
    } else {
        // Redirect back to the form with an error message
        header("Location: ../view/class_session.php?msg=error");
        exit();
    }

    // Close the prepared statement
    $stmtUpdate->close();
}
?>

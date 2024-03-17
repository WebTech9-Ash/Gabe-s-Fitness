<?php
// Include your database connection file
include '../setting/connection.php';

if (isset($_POST['add-class-session'])) {
    // Collect form data and store in variables
    $classType = $_POST['class-type'];
    $className = $_POST['class-name'];
    $startTime = $_POST['start-time'];
    $endTime = $_POST['end-time'];
    $maxCapacity = $_POST['max-capacity'];
    $description = $_POST['description'];

    // Prepare and execute SQL statement to check if the class session already exists
    $checkDuplicateQuery = "SELECT COUNT(*) as count FROM ClassSessions WHERE class_name = ?";
    $stmtCheck = $conn->prepare($checkDuplicateQuery);
    $stmtCheck->bind_param("s", $className);
    $stmtCheck->execute();
    $resultCheck = $stmtCheck->get_result();
    $rowCheck = $resultCheck->fetch_assoc();
    $stmtCheck->close();

    if ($rowCheck['count'] > 0) {
        // Redirect back to the form with a duplicate class session message
        header("Location: ../view/class_session.php?msg=duplicate");
        exit();
    }

    // Proceed to insert the class session if it doesn't exist
    $insertQuery = "INSERT INTO ClassSessions (class_type, class_name, start_time, end_time, max_capacity, description) 
                    VALUES (?, ?, ?, ?, ?, ?)";
    $stmtInsert = $conn->prepare($insertQuery);
    $stmtInsert->bind_param("ssssss", $classType, $className, $startTime, $endTime, $maxCapacity, $description);

    if ($stmtInsert->execute()) {
        // Redirect back to the class session page after a successful add
        header("Location: ../view/add_class_session.php");
        exit();
    } else {
        // Redirect back to the form with an error message
        header("Location: ../view/add_class_session.php?msg=error");
        exit();
    }

    // Close the prepared statements
    $stmtInsert->close();
} else {
    // Redirect back to the form if the form was not submitted
    header("Location: ../view/add_class_session.php?msg=error");
    exit();
}
?>

<?php
// Include your database connection file
include '../setting/connection.php';

if (isset($_POST['add-class-session'])) {
    // Collect form data and store in variables
    $ClassType = $_POST['ClassType'];
    $ClassName = $_POST['ClassName'];
    $StartTime = $_POST['StartTime'];
    $EndTime = $_POST['EndTime'];
    $MaxCapacity = $_POST['MaxCapacity'];
    $Description = $_POST['Description'];

    // Prepare and execute SQL statement to check if the class session already exists
    $checkDuplicateQuery = "SELECT COUNT(*) as count FROM ClassSessions WHERE ClassName = ?";
    $stmtCheck = $conn->prepare($checkDuplicateQuery);
    $stmtCheck->bind_param("s", $ClassName);
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
    $insertQuery = "INSERT INTO ClassSessions (ClassType, ClassName, StartTime, EndTime, MaxCapacity, Description) 
                    VALUES (?, ?, ?, ?, ?, ?)";
    $stmtInsert = $conn->prepare($insertQuery);
    $stmtInsert->bind_param("ssssss", $ClassType, $ClassName, $StartTime, $EndTime, $MaxCapacity, $Description);

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

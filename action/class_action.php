<?php
include '../setting/connection.php';
//Joining a class
if (isset($_POST['join-class'])) {

    $sessionId = $_POST['session-id']; 
    $attendanceTime = $_POST['attendance-time'];


    $userId = $_SESSION['userId']; 
    $query = "INSERT INTO ClassAttendees (SessionID, UserID, AttendanceDateTime) VALUES ('$sessionId', '$userId', '$attendanceTime')";
    $result = mysqli_query($conn, $query);
    if ($result) {
        echo "Class Joined!";
    } else {
        echo "Failed to join class: " . mysqli_error($conn);
    }
}


//Leaving a class
if (isset($_POST['leave-class'])) {

    $sessionId = $_POST['session-id']; 

    $userId = $_SESSION['userId']; 

    $query = "DELETE FROM ClassAttendees WHERE UserID = '$userId' AND SessionID = '$sessionId'";
    $result = mysqli_query($conn, $query);
    if ($result) {
        echo "Left the class!";
    } else {
        echo "Failed to leave the class: " . mysqli_error($conn);
    }
}

mysqli_close($conn);


<?php
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Set the 'userId' session variable
    $_SESSION['userId'] = 6;
    include '../setting/connection.php';
    
    $gymId = $_POST['gym-select'];
    
    $joinDate = date("Y-m-d");
    $expiryDate = date('Y-m-d', strtotime("+1 year"));

    $gymId = mysqli_real_escape_string($conn, $gymId);

    $query = "INSERT INTO Memberships (UserID, GymID, JoinDate, ExpiryDate) VALUES ('" . $_SESSION['userId'] . "', '$gymId', '$joinDate', '$expiryDate')";


    $result = mysqli_query($conn, $query);

    if ($result) {
            echo "Membership registered successfully.";
        } else {
            echo "Failed to register membership: " . mysqli_error($conn);
        }
    

    mysqli_close($conn);
} else {
    echo "Form data not submitted.";
}

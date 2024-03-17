<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include '../setting/connection.php';

    $memberEmail = $_POST['member-email'];
    $pass = $_POST['member-password']; 
    $memberPassword = password_hash($pass, PASSWORD_DEFAULT);
    $gymId = $_POST['gym-select'];
    
    $query = "SELECT UserID FROM Users WHERE Email = '$memberEmail' AND Passwd = '$memberPassword'";
    $result = $conn->query($query);

    echo pass;
    echo memberPassword;
    echo memberEmail;

    if ($result->num_rows > 0) {
        $joinDate = date("Y-m-d"); 
        
      
        $expiryDate = date('Y-m-d', strtotime("+1 year")); 
        
        
        $memberId = mysqli_real_escape_string($conn, $memberId);
        $gymId = mysqli_real_escape_string($conn, $gymId);
        //$membershipPlan = mysqli_real_escape_string($conn, $membershipPlan);

        $query = "INSERT INTO Memberships (UserID, GymID, JoinDate, ExpiryDate) VALUES ('$result', '$gymId', '$joinDate', '$expiryDate')";

        $result = mysqli_query($conn, $query);

        if ($result) {
            echo "Membership registered successfully.";
        } else {
            echo "Failed to register membership: " . mysqli_error($conn);
        }
    } else {
        echo "Invalid email or password.";
    }

    mysqli_close($conn);
} else {
    echo "Form data not submitted.";
}

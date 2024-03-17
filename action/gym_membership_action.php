<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include '../setting/connection.php';

    $memberId = $_POST['member-id'];
    $memberEmail = $_POST['member-email'];
    $memberPassword = $_POST['member-password']; 
    $gymId = $_POST['gym-select'];
    $membershipPlan = $_POST['member-plan'];

    $sql = "SELECT UserID FROM Users WHERE Email = '$memberEmail' AND Passwd = '$memberPassword'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $joinDate = date("Y-m-d"); 
        
      
        $expiryDate = date('Y-m-d', strtotime("+1 year")); 
        
        
        $memberId = mysqli_real_escape_string($conn, $memberId);
        $gymId = mysqli_real_escape_string($conn, $gymId);
        //$membershipPlan = mysqli_real_escape_string($conn, $membershipPlan);

        $query = "INSERT INTO Memberships (UserID, GymID, JoinDate, MembershipType, ExpiryDate) VALUES ('$memberId', '$gymId', '$joinDate', '$membershipPlan', '$expiryDate')";

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

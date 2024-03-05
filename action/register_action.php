<?php
session_start();
include("../setting/connection.php");
$fname = isset($_POST['fname']) ? trim($_POST['fname']) : '';
$lname = isset($_POST['lname']) ? trim($_POST['lname']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$gender = isset($_POST['gender']) ? trim($_POST['gender']) : '';
$dob = isset($_POST['dob']) ? trim($_POST['dob']) : '';
$password = isset($_POST['password']) ? trim($_POST['password'] ): '';

$fname = htmlspecialchars($fname, ENT_QUOTES, 'UTF-8');
$lname= htmlspecialchars($lname, ENT_QUOTES, 'UTF-8');
$email = htmlspecialchars($email, ENT_QUOTES,'UTF-8');
$gender = htmlspecialchars($gender, ENT_QUOTES,'UTF-8');
$dob = htmlspecialchars($dob, ENT_QUOTES,'UTF-8');
$password= htmlspecialchars($password, ENT_QUOTES,'UTF-8');

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$query = "INSERT INTO Users (FirstName,LastName,Gender,dob,Passwd, Email, UserType) VALUES ('$fname', '$lname', '$gender', '$dob', '$hashed_password', '$email', '1')";
$result = $conn->query($query);
if($result){

    $_SESSION["success"] = true;

    header("Location:../login/register_view.php");
    $conn->close();
    exit();
}else {
    $_SESSION["success"] = false;
    echo "Error: " . mysqli_error($conn);
    header("Location:../login/register_view.php");
    $conn->close();
    exit();
}



 
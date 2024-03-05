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
$gender = htmlspecialchars($email, ENT_QUOTES,'UTF-8');
$dob = htmlspecialchars($email, ENT_QUOTES,'UTF-8');
$password= htmlspecialchars($email, ENT_QUOTES,'UTF-8');

$query = "INSERT INTO Users (FirstName,LastName,Gender,dob,Passwd, Email, UserType) VALUES ('$fname', '$lname', '$gender', '$dob', '$password', '$email', '1')";
$result = $conn->query($query);
if($result){
    header("Location:view/homepage.php");
}else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);



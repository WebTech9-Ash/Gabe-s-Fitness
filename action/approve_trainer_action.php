<?php
include("../setting/connection.php");
include("../function/gymmangement.php");
$user = $_GET['user'];
approveMembershipTrainer($conn,$user);
header("Location: ../admin/management.php");
exit();
?>
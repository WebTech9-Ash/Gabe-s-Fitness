<?php
include("../setting/connection.php");
include("../function/gymmangement.php");
$user = $_GET['user'];
suspendMembershipTrainer($conn,$user);
?>
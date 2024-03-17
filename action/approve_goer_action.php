<?php
include("../setting/connection.php");
include("../function/gymmangement.php");
$user = $_GET['user'];
approveMembershipGoer($conn,$user);

?>
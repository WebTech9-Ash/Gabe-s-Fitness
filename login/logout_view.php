<?php
unset($_SESSION['userId']);
unset($_SESSION['userRole']);
header ('Location: ../login/login_view.php');
?>
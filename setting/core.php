<?php

session_start();
function isLogin(){
if(isset($_SESSION['userId'])) {
    header ('Location: ../view/homepage.php');
} else {
    header ('Location: ../login/login_view.php');

}

}
?>
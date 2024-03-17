<?php

session_start();
function isNotLogin(){
if(isset($_SESSION['userId'])) {

} else {
    header ('Location: ../login/login_view.php');

}

}


function isLogin(){
if(isset($_SESSION['userId'])) {

    header ('Location: ../view/homepage.php');

} else {
    

}

}


?>
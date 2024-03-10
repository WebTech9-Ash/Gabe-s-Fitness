<?php

session_start();
function isLogin(){
if(isset($_SESSION['userId'])) {
    
} else {
    header ('Location: ../login/login_view.php');

}
}

?>
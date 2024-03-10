<?php

function isLogin(){
    
    if(isset($_SESSION['userId'])&& $_SESSION['userId']!= null){

    }

    else{

        header ('Location: ../login/login_view.php');


    }
}
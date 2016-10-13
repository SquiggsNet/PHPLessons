<?php
    function checkIfLoggedIn(){
        session_start();
        if(empty($_SESSION['loginName'])){
            header("location:userLogin.html");
        }
    }
?>
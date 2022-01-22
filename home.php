<?php

    $templateParams["nome"] = "page-home.php";

    require('template/base.php');
    if(isset($_POST["email"]) && isset($_POST["password"])){
        $login_result = $dbh->checkLogin($_POST["email"], $_POST["password"]);
        if(count($login_result)==0){
            //Login fallito
            $templateParams["errorelogin"] = "Errore! Controllare username o password!";
        }
        else{
            registerLoggedUser($login_result[0]);
        }
    }
    
    if(isUserLoggedIn()){
        $templateParams["titolo"] = "SvagoCity-Home";
        $templateParams["nome"] = "login-home.php";
        if(isset($_GET["formmsg"])){
            $templateParams["formmsg"] = $_GET["formmsg"];
        }
    }
    else{
        $templateParams["titolo"] = "SvagoCity";
        $templateParams["nome"] = "base.php";
    }
    
    require 'template/base.php';
?>
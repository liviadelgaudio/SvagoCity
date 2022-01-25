<?php
    
    require_once("bootstrap.php");

    $templateParams["recensione"] = $dbh->getReviews(2);
    $templateParams["nome"] = "page-home.php";

    require 'template/base.php';

    if(isset($_POST["email"]) && isset($_POST["password"])){

        $login_result = $dbh->checkLoginClient($_POST["email"], $_POST["password"]);
        $login_result1 = $dbh->checkLoginAdmin($_POST["email"], $_POST["password"]);

        if(count($login_result)==0 && count($login_result1)==0 ){
            //Login fallito
            $templateParams["errorelogin"] = "Errore! Controllare username o password!";
        }
        else if(count($login_result)!=0){
            registerLoggedClient($login_result[0]);
        }
        else{
            registerLoggedAdmin($login_result1[0]);
        }
    }
    
    if(isUserLoggedInClient()){
        $templateParams["titolo"] = "SvagoCity-Home";
        $templateParams["nome"] = "login-home.php";
        if(isset($_GET["formmsg"])){
            $templateParams["formmsg"] = $_GET["formmsg"];
        }
    }
    else if (isUserLoggedInAdmin()){
        $templateParams["titolo"] = "SvagoCity-Home";
        $templateParams["nome"] = "admin-login.php";
        if(isset($_GET["formmsg"])){
            $templateParams["formmsg"] = $_GET["formmsg"];
        }
    }
    else{
        $templateParams["titolo"] = "SvagoCity";
        $templateParams["nome"] = "page-home.php";
    }
?>

<?php
function isActive($pagename){
    if(basename($_SERVER['PHP_SELF'])==$pagename){
        echo " class='active' ";
    }
}

function isUserLoggedInClient(){
    return !empty($_SESSION['idCliente']);
} 

function isUserLoggedInAdmin(){
    return !empty($_SESSION['codiceAdmin']);
} 

function registerLoggedClient($user){
    $_SESSION["idCliente"] = $user["idCliente"];
    $_SESSION["emailCliente"] = $user["emailCliente"];
    $_SESSION["nomeCliente"] = $user["nomeCliente"];
}

function registerLoggedAdmin($user){
    $_SESSION["codiceAdmin"] = $user["codiceAdmin"];
    $_SESSION["email"] = $user["email"];
    $_SESSION["nome"] = $user["nome"];
}

?>
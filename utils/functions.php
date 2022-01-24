<?php
function isActive($pagename){
    if(basename($_SERVER['PHP_SELF'])==$pagename){
        echo " class='active' ";
    }
}

function isUserLoggedIn(){
    return !empty($_SESSION['idCliente']);
} 

function registerLoggedUser($user){
    $_SESSION["idCliente"] = $user["idCliente"];
    $_SESSION["emailCliente"] = $user["emailCliente"];
    $_SESSION["nomeCliente"] = $user["nomeCliente"];
}

function removeItem($idCarrello, $idProdotto){
    $dbh->removeItemFromCart($idCarrello, $idProdotto);
}


?>
<?php

$idCliente = $_SESSION["idCliente"];

$result = $dbh->getCurrentCartId($idCliente);
if(count($result) > 0){
    $cartId = $result[0]["idCarrello"];
} else {
    $cartId = $dbh->insertCart($idCliente);
}


?>
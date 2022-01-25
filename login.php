<?php
require_once("bootstrap.php");

$templateParams["nome"] = "login-home.php";
$templateParams["notifiche"] = $dbh->getUserNotifications($_SESSION['idCliente']);
$templateParams["ordini"] = $dbh->getOrdineById($_SESSION['idCliente']);



require('template/base.php');

?>
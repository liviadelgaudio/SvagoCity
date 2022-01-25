<?php
require_once("bootstrap.php");

$templateParams["nome"] = "login-home.php";
$templateParams["notifiche"] = $dbh->getUserNotifications(1);
//$templateParams["notifiche"] = $dbh->getUserNotifications($_SESSION['idCliente']);
$templateParams["ordini"] = $dbh->getOrdineById(1);



require('template/base.php');

?>
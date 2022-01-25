<?php
require_once("bootstrap.php");

$templateParams["nome"] = "admin-login.php";
$templateParams["notifiche"] = $dbh->getAdminNotifications(1);
//$templateParams["notifiche"] = $dbh->getAdminNotifications($_SESSION['idCliente']);
$templateParams["ordini"] = $dbh->getOrdine();

require('template/base.php');

?>



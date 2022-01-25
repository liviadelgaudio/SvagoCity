<?php
require_once("bootstrap.php");

$templateParams["notifiche"] = $dbh->getAdminNotifications(1);
//$templateParams["notifiche"] = $dbh->getAdminNotifications($_SESSION['idCliente']);
$templateParams["nome"] = "admin-login.php";

require('template/base.php');

?>
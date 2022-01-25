<?php
 require_once("bootstrap.php");

 $templateParams["nome"] = "admin-login.php";
 $templateParams["notifiche"] = $dbh->getAdminNotifications($_SESSION['codiceAdmin']);
 $templateParams["ordini"] = $dbh->getOrdine();

 require('template/base.php');

 ?>

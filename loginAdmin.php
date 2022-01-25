<?php
 require_once("bootstrap.php");

 $templateParams["nome"] = "admin-login.php";
 $templateParams["notifiche"] = $dbh->getAdminNotifications($_SESSION['idAdmin']);
 $templateParams["ordini"] = $dbh->getOrdine();

 require('template/base.php');

 ?>

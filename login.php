<?php
require_once("bootstrap.php");

$templateParams["nome"] = "login-home.php";

$templateParams["ordini"] = $dbh->getOrdineById(1);



require('template/base.php');

?>
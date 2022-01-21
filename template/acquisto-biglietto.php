<?php

require_once("bootstrap.php");

$templateParams["biglietto-scelto"] = $dbh->getTicketById($_GET["id"]);
$templateParams["nome"] = "biglietto-completo.php";

require("template/base.php");
?>
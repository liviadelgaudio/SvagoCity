<?php

require_once("bootstrap.php");

$idarticolo = -1;
if(isset($_GET["id"])){
    $idarticolo = $_GET["id"];
}
$templateParams["biglietto-scelto"] = $dbh->getTicketById($_GET["id"]);
$templateParams["nome"] = "biglietto-completo.php";

require("template/base.php");
?>
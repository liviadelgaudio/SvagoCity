<?php

require_once("bootstrap.php");

$idEvento = -1;
if(isset($_GET["id"])){
    $idEvento = $_GET["id"];
}
$templateParams["evento-scelto"] = $dbh->getEventById($_GET["id"]);
$templateParams["nome"] = "evento-completo.php";

require("template/base.php");
?>
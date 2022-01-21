<?php
    require_once("bootstrap.php");

    $templateParams["titolo"] = "SvagoCity - Prodotti";
    $templateParams["prodotto"] = $dbh->getProductsType();
    $templateParams["nome"] = "lista-prodotti.php";

    require("template/base.php");
?>
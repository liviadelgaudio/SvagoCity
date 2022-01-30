<?php
    require_once("bootstrap.php");

    $templateParams["titolo"] = "SvagoCity - Prodotti";
    if(isset($_SESSION["codiceAdmin"])){
        $templateParams["prodotto"] = $dbh->getProducts();
        $templateParams["nome"] = "lista-prodotti-admin.php";
    } else{
        $templateParams["prodotto"] = $dbh->getProductsType();
        $templateParams["nome"] = "lista-prodotti.php";
    }

    require("template/base.php");
?>
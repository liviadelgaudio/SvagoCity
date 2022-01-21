<?php
    require_once("bootstrap.php");

    $templateParams["titolo"] = "SvagoCity - Promozioni";
    $templateParams["promo"] = $dbh->getPromos();
    $templateParams["nome"] = "lista-promozioni.php";

    require("template/base.php");
?>
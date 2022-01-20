<?php
    //includere bootstrap
    require_once("bootstrap.php");

    //logica
    //nb non devo istanziare dbhelper anche qui perchè l'ho già fetto nel bootstrap
    $templateParams["titolo"] = "SvagoCity - Biglietti";
    $templateParams["categoria-biglietti"] = $dbh->getTicketsCategories();
    $templateParams["nome"] = "acquistobiglietti.php";

    //presentazione
    require("template/base.php");
?>
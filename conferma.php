<?php

    require_once("bootstrap.php");

    $templateParams["titolo"] = "SvagoCity - conferma";
    $templateParams["nome"] = "conferma-page.php";
    $templateParams["articoli"] = $dbh->getCartItems($_SESSION['idCarrello']);

    require("template/base.php");


?>
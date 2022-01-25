<?php

    require_once("bootstrap.php");

    $templateParams["titolo"] = "SvagoCity - Pagamento";
    $templateParams["nome"] = "pagamento-page.php";
    $templateParams["articoli"] = $dbh->getCartItems($_SESSION['idCarrello']);

    require("template/base.php");


?>
<?php

    require_once("bootstrap.php");

    $templateParams["titolo"] = "SvagoCity - Eventi";
    $templateParams["evento"] = $dbh->getEvents();
    $templateParams["nome"] = "lista-eventi.php";

    require("template/base.php");
?>
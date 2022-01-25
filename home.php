<?php
    
    require_once("bootstrap.php");

    $templateParams["recensione"] = $dbh->getReviews(2);
    $templateParams["nome"] = "page-home.php";

    require 'template/base.php';

?>

<?php

     require_once("bootstrap.php");

     $templateParams["titolo"] = "SvagoCity - Carrello";
     //fare i controlli
     $templateParams["articoli"] = $dbh->getCartItems($_SESSION['idCarrello']);
     $templateParams["nome"] = "page-carrello.php";

     require("template/base.php");


 ?>

<?php
    require_once 'bootstrap.php';
    //Inserisco

    $nome = htmlspecialchars($_POST["nome"]);
    $desc = htmlspecialchars($_POST["desc"]);
    $sconto = $_POST["sconto"];
    $codice = htmlspecialchars($_POST["codice"]);
    $_SESSION['idPromozione']=$dbh->newPromo($nome, $desc, $sconto , $codice);
    header("location: loginAdmin.php");
?>


<?php
    require_once 'bootstrap.php';
    //Inserisco

    $nome = htmlspecialchars($_POST["nome"]);
    $desc = htmlspecialchars($_POST["desc"]);
    $prezzo = htmlspecialchars($_POST["prezzo"]);
    $capienza = htmlspecialchars($_POST["capienza"]);
    $data = htmlspecialchars(date($_POST["data"]));
    $tipologia = htmlspecialchars($_POST["tipologia"]);
    $_SESSION['idEvento']=$dbh->newEvent($nome, $desc, $prezzo , $capienza, $data, $tipologia);
    header("location: loginAdmin.php");
?>


<?php
require_once 'bootstrap.php';

    //Inserisco
    $nomeCliente = htmlspecialchars($_POST["nome"]);
    $cognomeCliente = htmlspecialchars($_POST["cognome"]);
    $emailCliente = htmlspecialchars($_POST["email"]);
    $passwordCliente = htmlspecialchars($_POST["password"]);
    $dataNascita = date("Y-m-d"); //aggiusta! prendi data corretta, così è la data di oggi
    $indirizzoCliente = htmlspecialchars($_POST["indirizzo"]);
    $cliente = $_SESSION["idCliente"];
    $id = $dbh->insertClient($nomeCliente, $cognomeCliente, $emailCliente, $passwordCliente, $dataNascita, $indirizzoCliente);
    if($id){
      $msg = "Inserimento completato correttamente!";
    }
    else{
        $msg = "Errore in inserimento!";
    }
    header("location: home.php?formmsg=".$msg);
?>
<?php
    require_once 'bootstrap.php';
    //Inserisco

    $codiceCliente = $_SESSION["idCliente"];
    $testo = htmlspecialchars($_POST["testo"]);
    $valutazione = $_POST["valutazione"];
    $_SESSION['idRecensione']=$dbh->newRecensione($codiceCliente, $testo, $valutazione);
    header("location: home.php");
?>


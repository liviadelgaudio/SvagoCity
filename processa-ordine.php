<?php
    require_once 'bootstrap.php';
    //Inserisco

    $codiceCliente = $_SESSION["idCliente"];
    $codiceCarrello = $_SESSION["idCarrello"];
    $data = htmlspecialchars(date("Y-m-d"));
    $pagamento = $_SESSION["pagamento"];
    $_SESSION['idOrdine'] = $dbh->newOrder($codiceCliente, $codiceCarrello, $data , $pagamento);
    header("location: conferma.php");
?>


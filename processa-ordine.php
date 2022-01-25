<?php
    require_once 'bootstrap.php';
    //Inserisco

    $codiceCliente = $_SESSION["idCliente"];
    $codiceCarrello = $dbh->getCartbyId($codiceCliente);
    $data = htmlspecialchars(date("Y-m-d"));
    $pagamento = $_SESSION["pagamento"];
    $dbh->newOrder(2, 2, $data , $pagamento);
    header("location: login.php");
?>



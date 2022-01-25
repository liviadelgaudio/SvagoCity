<?php
    require_once 'bootstrap.php';
    //Inserisco
    $idCarrello = $_SESSION["idCarrello"];

    if(!isUserLoggedInClient()){
        header("location: home.php");
}
    $dbh->clientCart($idCarrello, $_SESSION["idCliente"]);
    header("location: pagamento.php");
?>



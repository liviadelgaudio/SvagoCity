<?php
    require_once("../bootstrap.php");

    $idCliente = $_POST["idCliente"];
    $datum = new DateTime();
    $datum->add(new DateInterval("PT60S"));
    $startTime = $datum->format('Y-m-d H:i:s');
    $dbh->addNotificationFor($idCliente, $startTime, "notifica");
?>
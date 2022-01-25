<?php
    require_once("../bootstrap.php");
    //aggiungo notificaadmin nel database
    $idAdmin = $_POST["idAdmin"];
    $datum = new DateTime();
    $datum->add(new DateInterval("PT60S"));
    $startTime = $datum->format('Y-m-d H:i:s');
    $dbh->addNotificationForAdmin($idAdmin, $startTime, $_POST["testo"]);
?>

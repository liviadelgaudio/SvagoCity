<?php
    require_once("../bootstrap.php");

    switch($_POST["statoOrdine"]){
        case 1:
            $testo = "ordine #" . $_POST["idOrdine"] . " registrato";
            break;
        case 2:
            $testo = "ordine #" . $_POST["idOrdine"] . " in fase di elaborazione";
            break;
        case 3:
            $testo = "ordine #" . $_POST["idOrdine"] . " in attesa del corriere";
            break;
        case 4:
            $testo = "ordine #" . $_POST["idOrdine"] . " spedito";
            break;
        case 5:
            $testo = "ordine #" . $_POST["idOrdine"] . " ricevuto";
            break;
        default:
            break;
    }

    //aggiungo notificacliente nel database
    $idCliente = $_POST["idCliente"];
    $datum = new DateTime();
    $datum->add(new DateInterval("PT60S"));
    $startTime = $datum->format('Y-m-d H:i:s');
    $dbh->addNotificationFor($idCliente, $startTime, $testo);
    //$dbh->updateOrderStatus(1, $testo);
    //header("location: loginAdmin.php");
?>
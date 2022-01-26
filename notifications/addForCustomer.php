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

    /* creazione testo mail */

$email = "liviadelgaudio@icloud.com";
$testo_mail="Nuova notifica da SvagoCity:\r\n
Gentile cliente,
La informiamo che il suo ordine #1 è stato spedito.
La ringraziamo per aver usato i nostri servizi. La aspettiamo presto nel nostro parco.";

/* creazione oggetto e testata mail */

$mail_headers = "From: SvagoCity  <$email>\r\n";
$mail_headers .= "Reply-To: " .  $email . "\r\n";
$oggetto="Il tuo ordine è stato spedito";

/* invio mail */
if(mail('liviadelgaudio@outlook.it', $oggetto, $testo_mail, $mail_headers))
         {echo 'la mail è stata spedita con successo';}
else  
         {echo 'la mail non è stata inviata';}

?>

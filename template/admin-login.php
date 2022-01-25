<?php 
if(isset($_POST['logout'])){
    session_destroy();
    header("location: home.php");
}
?>

<?php if(isset($_POST['modifica'])){

        switch($_POST["stato"]){
            case 1:
                $testo = "ordine #" . $_POST["idOrdine"] . " registrato";
                $stato = "registrato";
                break;
            case 2:
                $testo = "ordine #" . $_POST["idOrdine"] . " in fase di elaborazione";
                $stato = "in fase di elaborazione";
                break;
            case 3:
                $testo = "ordine #" . $_POST["idOrdine"] . " in attesa del corriere";
                $stato = "in attesa del corriere";
                break;
            case 4:
                $testo = "ordine #" . $_POST["idOrdine"] . " spedito";
                $stato = "spedito";
                break;
            case 5:
                $testo = "ordine #" . $_POST["idOrdine"] . " ricevuto";
                $stato = "ricevuto";
                break;
            default:
                break;
        }
    
        //aggiungo notificacliente nel database
        $idCliente = $_POST["idCliente"];
        $datum = new DateTime();
        $datum->add(new DateInterval("PT60S"));
        $startTime = $datum->format('Y-m-d H:i:s');
        $dbh->addNotificationForClient($_POST["idCliente"], $startTime, $testo);
        $dbh->updateOrderStatus($stato, $_POST["idOrdine"]); //mettere id ordine
        header("location: loginAdmin.php");
}
?>

<div class="text-center">
    <h1>Bentornato</h1>
    <div class="text-left col-12 col-md-8">
        <h2>Ordini</h2>
        <table style="border: 3px solid; border-color: #c27feb; margin: 8px; margin-bottom:20px; padding-bottom: 20px; width:100%;" >
            <tr>
                <th id="idOrdine">ID ORDINE</th>
                <th id="dataOrdine">Data Ordine</th>
                <th id="statoOrdine">Stato Ordine</th>
                <th id="modificaStato">Opzioni modifica</th>
            </tr>
            <?php foreach($templateParams["ordini"] as $ordine):?>
                 <tr>
                     <td headers="idOrdine"><?php echo $ordine["idOrdine"];?></td>
                     <td headers="dataOrdine"><?php echo $ordine["dataOrdine"]; ?></td>
                     <td headers="statoOrdine"><?php echo $ordine["statoOrdine"]; ?></td>
                     <td headers="modificaStato"><form method="POST">
                        <input type="hidden" name="idOrdine" value="<?php echo $ordine["idOrdine"];?>" />
                        <input type="hidden" name="idCliente" value="<?php echo $ordine["codiceCliente"];?>" />
                        <select name="stato" required> 
                            <option value="1">registrato</option>
                            <option value="2">in fase di elaborazione</option>
                            <option value="3">in attesa del corriere</option>
                            <option value="4">spedito</option>
                            <option value="5">ricevuto</option>
                        </select>
                        <input type="Submit" name="modifica" value="modifica stato" /></form></td>
                 </tr>
             <?php endforeach; ?>
        </table>
    </div>
    <div class="text-left col-12 col-md-4">
        <h2>Notifiche</h2>
        <div>
        <table style="border: 3px solid; border-color: #c27feb; margin: 8px; margin-bottom:20px; padding-bottom: 20px; width:100%;" >
            <tr>
                <th id="descrizioneNotifica">Notifica</th>
                <th id="dataNotifica">Data</th>
            </tr>
            <?php foreach($templateParams["notifiche"] as $notifica):?>
                <tr>
                    <td headers="descrizioneNotifica"><?php echo $notifica["descrizione"];?></td>
                    <td headers="dataNotifica"><?php echo $notifica["data"]; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
        </div>
        <form name="logout" METHOD=POST>
            <input type="submit" name="logout" value="Esegui il logout"/>
        </form>
    </div>
</div>

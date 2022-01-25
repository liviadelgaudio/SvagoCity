<?php 
if(isset($_POST['logout'])){
    session_destroy();
    header("location: home.php");
}
?>

<div class="text-center">
    <h1>Benvenuto/a <?php echo $_SESSION['nomeCliente'];?> !</h1>
    <div class="text-left col-12 col-md-8">
        <h2>Ordini</h2>
        <table style="border: 3px solid; border-color: #c27feb; margin: 8px; margin-bottom:20px; padding-bottom: 20px; width:100%;" >
            <tr>
                <th id="idOrdine">ID ORDINE</th>
                <th id="dataOrdine">Data Ordine</th>
                <th id="statoOrdine">Stato Ordine</th>
            </tr>
            <?php foreach($templateParams["ordini"] as $ordine):?>
                <tr>
                    <td headers="idOrdine"><?php echo $ordine["idOrdine"];?></td>
                    <td headers="dataOrdine"><?php echo $ordine["dataOrdine"]; ?></td>
                    <td headers="statoOrdine"><?php echo $ordine["statoOrdine"]; ?></td>
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
                <?php endforeach; ?>
            </tr>
        </table>
        </div>
        <form name="logout" METHOD=POST>
            <input type="submit" name="logout" value="Esegui il logout"/>
        </form>

    </div>
</div>


<div class="text-center">
    <h1>Benvenuto</h1>
    <div class="col-12 col-md-8">
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
    <div class="col-12 col-md-4">
        <h2>Notifiche</h2>
        <div>
        <table style="border: 3px solid; border-color: #c27feb; margin: 8px; margin-bottom:20px; padding-bottom: 20px; width:100%;" >
            <tr>
                <th id="descrizioneNotifica">Notifica</th>
                <th id="dataNotifica">Data</th>
            </tr>
            <?php foreach($templateParams["notifiche"] as $notifica):?>
                    <td headers="descrizioneNotifica"><?php echo $notifica["descrizione"];?></td>
                    <td headers="dataNotifica"><?php echo $notifica["data"]; ?></td>
                <?php endforeach; ?>
        </table>
        </div>

    </div>
</div>

<script src="../jquery-1.11.3.min.js"></script>
<script type="text/javascript">

    $("button").on("click", () => {
        $.post(
            "../notifications/addForCustomer.php",
            { idCliente: 1 }, //TODO passgli l'id del cliente
            function(data, status) {
                alert("Data: " + data);
            }
        );
    });
</script>
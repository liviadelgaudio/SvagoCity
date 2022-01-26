<?php
    if(isset($_POST['modifica'])){
        echo $_POST['id'] . $_POST['prezzo'];
        //$dbh->updateTicketPrice($_POST['id'], $_POST['prezzo']);
        //header("location: biglietti.php");
    }
?>

<?php if(!isset($_SESSION["codiceAdmin"])){ ?>
    <div class="text-center">
        <h1>Scegli la tipologia di biglietto:</h1>
        <?php foreach($templateParams["biglietto"] as $ticket):
            $idBiglietto = $ticket["idBiglietto"];
        ?>
        <h2>
            <a href="acquisto-biglietto.php?id=<?php echo "$idBiglietto";?>"><?php echo $ticket["tipologiaBiglietto"]?></a>
        </h2>
        <?php endforeach; ?>
    </div>

<?php } else{ ?>
    <div class="text-center">
        <h1>Tipologie di biglietti presenti:</h1>
        <div style="border: 3px solid; border-color: #c27feb; margin: 8px; margin-bottom:20px">
            <?php foreach($templateParams["biglietto"] as $ticket): ?>
                <h2>
                    <?php echo $ticket["tipologiaBiglietto"]?>
                </h2>
                <form name="modificaBiglietto" METHOD=POST>
                    <input type="hidden" name="id" value="<?php echo $ticket["idBiglietto"] ; ?>" />
                    <label>Prezzo:<input type="number" name="prezzo" value="<?php echo $ticket["prezzoBiglietto"] ; ?>" /></label>
                    <input type="submit" name="modifica" value="Modifica"/>
                </form>
        </div>
        <?php endforeach; ?>
    </div>
<?php } ?>
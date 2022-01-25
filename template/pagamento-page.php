
<div>
    <div class="pag col-lg-6 col-md-6 col-12" style="border: 3px solid; border-color: #c27feb; padding: 5px 5px; width: 47%; margin: 10px 10px;">
        <h2>
            Inserisci dati di pagamento
        </h2>
        <form action="conferma.php">
            <input type="radio" class="carta" id="cartaCredito" name="pagamento" value="cartaCredito">
            <label for="cartaCredito">Carta di Credito</label><br>
            <div class="pcarta" style="border: 3px solid; border-color: #c8e7ff;">
                <label for="carta"  style="margin: 5px 10%">Numero della carta: </label>
                <input type="text" id="carta" name="carta" placeholder="Numero della carta" style=" margin: 10px 8% "/><br>
                <label for="nome" style="margin: 10px 10%">Nome sulla carta: </label>
                <input type="text" id="nome" name="nome" placeholder="Nome sulla carta" style="margin: 10px 10% "/><br>
                <label for="cvv" style="margin: 10px 10%">CVV: </label>
                <input type="text" id="cvv" name="cvv" placeholder="CVV" style=" margin: 10px 10% 10px 25%"/>
            </div>
            <input type="radio" class="altro" id="consegna" name="pagamento" value="contrassegno">
            <label for="consegna">Contrassegno</label><br>
            <input type="radio" class="bonifico" id="bonifico" name="pagamento" value="bonifico">
            <label for="bonifico">Bonifico Bancario</label><br>
            <p class="pbonifico">IBAN: IT 89 H 379992784721937</p>
            <input type="submit" name="submit" value="Conferma Ordine">
            <p>La spedizione verrà effetuata al nostro punto di ritiro in Via dell'Università, 50 Cesena (FC).</p>
        </form>
    </div>
    <div class="col-lg-6 col-md-6 col-12" style="border: 3px solid; border-color: #c27feb; padding: 5px 5px width: 47%; margin: 10px 5px;">
        <?php $totale = 0;
    foreach($templateParams["articoli"] as $item):
        $totale += ($item["prezzoUnitario"]*$item["quantità"]); 
    switch($item["tipologia"]){
        case "biglietto" :
            $templateParams["prodotto"] = $dbh->getTicketById($item["idProdotto"]);
            foreach($templateParams["prodotto"] as $ticket):?>
                <div style="border-bottom: 3px dotted; border-color: #c27feb; margin: 8px; padding: 0px 25px 10px ">
                    <h3>
                        <?php echo $item["quantità"] . " x Biglietto " . ": " . $ticket["tipologiaBiglietto"] ?>
                    </h3>
                    <article>
                        <div>
                            Data utilizzo: <?php echo $item["dataUtilizzo"];?>
                        </div>
                        <?php echo "Prezzo: " . $item["quantità"] . " x " . $item["prezzoUnitario"] . "€"; ?>
                    </article>
                </div>
                <?php endforeach; 
            break;
        case "evento" :
            $templateParams["prodotto"] = $dbh->getEventById($item["idProdotto"]);
            foreach($templateParams["prodotto"] as $event):?>
                <div style="border-bottom: 3px dotted; border-color: #c27feb; margin: 8px; padding: 0px 25px 10px ">
                    <h3>
                        <?php echo $item["quantità"] . " x " . $event["tipologia"] . ": " . $event["nomeEvento"] ?>
                    </h3>
                    <article>
                        <div>
                            Data: <?php echo $event["dataEvento"];?>
                        </div>
                        <?php echo "Prezzo: " . $item["quantità"] . " x " . $item["prezzoUnitario"] . "€"; ?>
                    </article>
                </div>
                <?php endforeach; 
            break;
        case "prodotto" :
            $templateParams["prodotto"] = $dbh->getProductById($item["idProdotto"]);
            foreach($templateParams["prodotto"] as $product):?>
                <div style="border-bottom: 3px dotted; border-color: #c27feb; margin: 8px; padding: 0px 25px 10px ">
                    <h3>
                        <?php echo $item["quantità"] . " x " . $product["nomeProdotto"]; ?>
                    </h3>
                    <article>
                        <div>
                            <div>
                                Colore: <?php echo $product["coloreProdotto"] ?>
                            </div>
                            <div>
                                Taglia: <?php echo $product["tagliaProdotto"];?>
                            </div>
                        </div>
                        <?php echo "Prezzo: " . $item["quantità"] . " x " . $item["prezzoUnitario"] . "€"; ?>
                    </article>
                </div>
                <?php endforeach; 
            break;
        default:
            break;
        }

?>

<?php endforeach; ?>
<div style="border-bottom: 3px dotted; border-color: #c27feb; margin: 8px; padding: 10px 25px 10px; ">
<label>
    TOTALE CARRELLO: <?php echo $totale ;?> € 
</label>
</div>
</div>

<script>
$(document).ready(function(){
 $(".pcarta").hide();
 $(".pbonifico").hide();
 $(".carta").click(function(){
    $(".pcarta").show();
    <?php
     $_SESSION["pagamento"]="carta";  
    ?>
 });
 $(".bonifico").click(function(){
    $(".pbonifico").show();
    <?php
    $_SESSION["pagamento"]="bonifico"; 
    ?>
 });
 $(".altro").click(function(){
    $(".pcarta").hide();
    $(".pbonifico").hide();
    <?php
     $_SESSION["pagamento"]="carta"; 
    ?>
 });
});
</script>

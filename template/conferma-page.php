
<div>
    <div class="pag col-lg-6 col-md-6 col-12" style="border: 3px solid; border-color: #c27feb; padding: 5px 5px; width: 47%; margin: 10px 10px;">
        <h2>
            Inserisci dati di spedizione
        </h2>
       <p>La ringraziamo di aver effettuato l'ordine nel nostro sito.</p>
       <form action="processa-ordine.php" method="POST" class="reg" enctype="multipart/form-data">
          <input type="submit" name="termina" value="Termina">
       </form>
       <button>Chiudi</button>
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
</div>

<!--gestione notifica ordine andato a buon fine-->
<script src="./jquery-1.11.3.min.js"></script>
<script type="text/javascript">

    $("button").on("click", () => {
        $.post(
            "./notifications/addForAdmin.php",
            { idAdmin: 1 , testo: "ordine ricevuto: #"}, //TODO passgli l'id del cliente
            function(data, status) {
                alert("ordine effettuato correttamente");
            }
        );
    });
</script>

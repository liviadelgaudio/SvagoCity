<?php
    if(isset($_POST['rimuovi'])){
        $dbh->removeItemFromCart($_POST['id']);
        header("location: carrello.php");
    }
?>

<h1>Carrello</h1>
<h2> Riepilogo delle tue scelte:</h2>



<!--<div class="text-center">-->
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
                    <div style="font-size: 11px">
                        <form name="rimuoviBiglietto" METHOD=POST>
                            <input type="hidden" name="id" value="<?php echo $item["id"] ; ?>" />
                            <input type="submit" name="rimuovi" value="Rimuovi"/>
                        </form>
                    </div>
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
                    <div style="font-size: 11px">
                        <form name="rimuoviEvento" METHOD=POST>
                            <input type="hidden" name="id" value="<?php echo $item["id"] ; ?>" />
                            <input type="submit" name="rimuovi" value="Rimuovi"/>
                        </form>
                    </div>
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
                    <div style="font-size: 11px">
                        <form name="rimuoviArticolo" METHOD=POST>
                            <input type="hidden" name="id" value="<?php echo $item["id"] ; ?>" />
                            <input type="submit" name="rimuovi" value="Rimuovi"/>
                        </form>
                    </div>
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

<div style="margin: 8px; padding: 10px 25px 10px; ">
<form action="processa-pagamento.php" class="reg" enctype="multipart/form-data">
    <input type="submit" name="submit" value="Vai al pagamento"/>
</form>
    </div>
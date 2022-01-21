<div class="text-center">
<h1>I prodotti firmati SvagoCity</h1>
<?php foreach($templateParams["prodotto"] as $prodotto):

    $templateParams["prodotto-selezionato"] = $dbh->getProductDescr($prodotto["nomeProdotto"]);
    foreach($templateParams["prodotto-selezionato"] as $prod):
    ?>
        <div style="border: 3px solid; border-color: #c27feb; margin: 8px; margin-bottom:20px">
            <div class="text-center">
                <h2><?php echo $prodotto["nomeProdotto"]; ?></h2>
            </div>
                <?php $templateParams["colori"] = $dbh->getProductColors($prodotto["nomeProdotto"]);?>
                <form name="AcquistoProdotto" METHOD=POST ACTION="acquisto.asp">
                    <label>Prezzo: <?php echo $prod["prezzoProdotoo"] . "€"; ?></label>
                    <label>Colore: 
                        <select name="colore"> 
                            <?php foreach($templateParams["colori"] as $colore):
                                echo "<option>".$colore["coloreProdotto"]."</option>" ; 
                            endforeach;
                            ?>
                        </select>
                    </label>
                    <label>Taglia:
                        <?php $templateParams["taglie"] = $dbh->getProductSizes($prodotto["nomeProdotto"], $colore["coloreProdotto"]) ?>
                        <select name="taglia"> 
                            <?php foreach($templateParams["taglie"] as $taglia):
                                echo "<option>".$taglia["tagliaProdotto"]."</option>" ; 
                            endforeach;
                            ?>
                        </select>
                    </label>
                    <label>Quantità:<input type="number" name="quantity" min="1" max="5" required/></label>
                    <input type="submit" value="Aggiungi"/>
                </form>
        </div>
    <?php endforeach; ?>
<?php endforeach; ?>
</div>
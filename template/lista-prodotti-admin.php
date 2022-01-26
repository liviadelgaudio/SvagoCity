<?php
    if(isset($_POST['aggiungi'])){
        $templateParams["prodotto-scelto"] = $dbh->getProductById($_POST['id']);
        foreach($templateParams["prodotto-scelto"] as $prod):
            $quantity = $_POST['quantity'] + $prod["disponibilitaProdotto"];
            $dbh->updateProductQuantity($prod["idProdotto"], $quantity);
            header("location: prodotti.php");
        endforeach; 
    }   
?>

<div class="text-center">
<h1>I prodotti firmati SvagoCity</h1>
<?php foreach($templateParams["prodotto"] as $prodotto): ?>
    <div style="border: 3px solid; border-color: #c27feb; margin: 8px; margin-bottom:20px; padding-bottom: 20px">
        <div class="text-center">
            <h2><?php echo $prodotto["nomeProdotto"]; ?></h2>
        </div>
        <form name="AcquistoProdotto" METHOD=POST>
            <input type="hidden" name="id" value="<?php echo $prodotto["idProdotto"];?>" />
            <input type="hidden" name="prezzo" value="<?php echo $prodotto["prezzoProdotoo"]; ?>" />
            <label>Prezzo: <?php echo $prodotto["prezzoProdotoo"] . "€"; ?></label>
            <div>
            <label>Colore: <?php echo $prodotto["coloreProdotto"]; ?><input type="hidden" name="colore" value="<?php echo $prodotto["coloreProdotto"]; ?>" /></label>
            <label>Taglia: <?php echo $prodotto["tagliaProdotto"]; ?><input type="hidden" name="taglia" value="<?php echo $prodotto["tagliaProdotto"]; ?>" /></label>
            </div><div>
                <label>Disponibilità in magazzino: <?php echo $prodotto["disponibilitaProdotto"] ; ?></label>
            </div>
            <label>Quantità:<input type="number" name="quantity" min="1" required/></label>
            <input type="submit" name="aggiungi" value="Aggiungi"/>
        </form>
        </div>
<?php endforeach; ?>
</div>
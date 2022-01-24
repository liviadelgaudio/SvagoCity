<?php
if(isset($_POST['aggiungi'])){
        //unset($_SESSION["idCarrello"]);
        if(!isset($_SESSION["idCarrello"])){ //se alla sessione corrente non è ancora stato associato un carrello
            if(isset($_SESSION['idCliente'])){ //se l'utente è loggato
                $cartId = $dbh->getCurrentCartId($idCliente); //associo un carrello personale
            } else{ //altirmenti carrello "generico"
                $cartId = $dbh->insertCart();
            }
            $_SESSION["idCarrello"] = $cartId;
        } else{ //se invece alla sessione è gia associato un idCarrello, uso quello
            $cartId = $_SESSION["idCarrello"];
        }
        //necessario ricavare l'id del prodotto scelto sulla base di nome, colore e taglia
        $templateParams["prodotto-aggiunto"] = $dbh->getProductId($_POST['nomeProdotto'], $_POST['colore'], $_POST['taglia']);
        foreach($templateParams["prodotto-aggiunto"] as $productId):
            //aggiunge al carrello l'elemento selezionato
            $dbh->addToCart($cartId, $productId["idProdotto"], $_POST['quantity'], $_POST['tipologia'], $_POST['prezzo'], NULL);
        endforeach;
    }
?>

<div class="text-center">
<h1>I prodotti firmati SvagoCity</h1>
<?php foreach($templateParams["prodotto"] as $prodotto):

    $templateParams["prodotto-selezionato"] = $dbh->getProductDescr($prodotto["nomeProdotto"]);
    foreach($templateParams["prodotto-selezionato"] as $prod):
    ?>
        <div style="border: 3px solid; border-color: #c27feb; margin: 8px; margin-bottom:20px; padding-bottom: 20px">
            <div class="text-center">
                <h2><?php echo $prodotto["nomeProdotto"]; ?></h2>
            </div>
                <?php $templateParams["colori"] = $dbh->getProductColors($prodotto["nomeProdotto"]);?>
                <form name="AcquistoProdotto" METHOD=POST>
                    <input type="hidden" name="nomeProdotto" value="<?php echo $prodotto["nomeProdotto"];?>" />
                    <input type="hidden" name="tipologia" value="prodotto" />
                    <input type="hidden" name="prezzo" value="<?php echo $prod["prezzoProdotoo"]; ?>" />
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
                    <input type="submit" name="aggiungi" value="Aggiungi"/>
                </form>
        </div>
    <?php endforeach; ?>
<?php endforeach; ?>
</div>
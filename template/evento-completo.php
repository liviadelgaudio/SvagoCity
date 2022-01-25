<?php
if(isset($_POST['aggiungi'])){
        //unset($_SESSION["idCarrello"]);
        if(!isset($_SESSION["idCarrello"])){ //se alla sessione corrente non è ancora stato associato un carrello
            if(isset($_SESSION['idCliente'])){ //se l'utente è loggato
                $cartId = $dbh->getCurrentCartId($_SESSION["idCliente"]); //associo un carrello personale
            } else{ //altirmenti carrello "generico"
                $cartId = $dbh->insertCart();
            }
            $_SESSION["idCarrello"] = $cartId;
        } else{ //se invece alla sessione è gia associato un idCarrello, uso quello
            $cartId = $_SESSION["idCarrello"];
        }
        //aggiunge al carrello l'elemento selezionato
        $dbh->addToCart($cartId, $_POST['idProdotto'], $_POST['quantity'], $_POST['tipologia'], $_POST['prezzo'], NULL);
    }
?>

<?php if(count($templateParams["evento-scelto"])==0): ?>

<article>
    <p>Evento non presente</p>
</article>
<?php 
else:
$evento = $templateParams["evento-scelto"][0];?>
<section>
<header class="text-center">
    <h2><?php echo $evento["tipologia"];?>: <?php echo $evento["nomeEvento"]; ?></h2>
</header>
<div class="text-center">
    <div>
        <div>
            <label>Data: <?php echo $evento["dataEvento"];?></label>
        </div>
        <div>
            <label>Descrizione evento:</label>
            <p><?php echo $evento["descrizioneEvento"];?></p>
        </div>
    </div>
    <div style="border: 3px solid; border-color: #c27feb; margin: 8px; margin-top:20px">
        <label>Per procedere all'acquisto, si prega di selezionare il numero di biglietti:</label>        
        <form name="AcquistoEvento" METHOD=POST>
            <input type="hidden" name="idProdotto" value="<?php echo $evento["idEvento"]; ?>" />
            <input type="hidden" name="prezzo" value="<?php echo $evento["prezzo"]; ?>" />
            <input type="hidden" name="tipologia" value="evento" />
            <div>
            <label>Prezzo: <?php echo $evento["prezzo"] . "€"; ?></label>
            </div>
            <div>
            <label>Quantità:<input type="number" name="quantity" min="1" max="10" required/></label>
            <input type="submit" name="aggiungi" value="Aggiungi"/>
            </div>
        </form>
    </div>
</div>
</section>

<?php endif; ?>
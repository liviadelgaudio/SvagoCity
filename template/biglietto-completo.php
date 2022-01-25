<?php
if(isset($_POST['aggiungi'])){
        //unset($_SESSION["idCarrello"]);
        if(!isset($_SESSION["idCarrello"])){ //se alla sessione corrente non è ancora stato associato un carrello
            if(isset($_SESSION['idCliente'])){ //se l'utente è loggato
                $cartId = $dbh->getCurrentCartId($_SESSION['idCliente']); //associo un carrello personale
            } else{ //altirmenti carrello "generico"
                $cartId = $dbh->insertCart();
            }
            $_SESSION["idCarrello"] = $cartId;
        } else{ //se invece alla sessione è gia associato un idCarrello, uso quello
            $cartId = $_SESSION["idCarrello"];
        }
        $data = $_POST['data'];
        //aggiunge al carrello l'elemento selezionato
        $dbh->addToCart($cartId, $_POST['idProdotto'], $_POST['quantity'], $_POST['tipologia'], $_POST['prezzo'], $data);
    }
?>
<?php if(count($templateParams["biglietto-scelto"])==0): ?>
<article>
    <p>Biglietto non presente</p>
</article>
<?php 
else:
$ticket = $templateParams["biglietto-scelto"][0];?>
<section>
<header class="text-center">
    <h2><?php echo "Acquisto biglietto: " . $ticket["tipologiaBiglietto"];?></h2>
</header>
<div style="padding: 20px 0;">
    <div class="col-12 col-md-6">
        <div>
            <label>Prezzo: <?php echo $ticket["prezzoBiglietto"] . "€" ;?></label>
        </div>
        <div>
            <label>Per acquistare il biglietto selezionato, compilare i seguenti campi:</label>
        </div>
        <form name="AcquistoBiglietto" METHOD=POST>
            <input type="hidden" name="tipologia" value="biglietto" />
            <input type="hidden" name="prezzo" value="<?php echo $ticket["prezzoBiglietto"];?>" />
            <input type="hidden" name="idProdotto" value="<?php echo $ticket["idBiglietto"];?>" />
            <label>Data:<input type="date" name="data" required/></label>
            <label>Quantità:<input type="number" name="quantity" min="1" max="10" required/></label>
            <input type="submit" name="aggiungi" value="Aggiungi"/>
        </form>
    </div>
    <div class="col-12 col-md-6">
        <p>Si informano i clienti che in fase di acquisto sarà richiesto di inserire i dati dell’intestatario del biglietto, necessari per la verifica dei requisiti di età minima. Al momento dell’ingresso nel parco sarà richiesto un documento d’identità per verificare le informazioni fornite. Qualora si desiderasse cambiare l’intestatario del biglietto, siete pregati di consultare le FAQ riportate <a href="#">qui</a>:</p>
    </div>
</div>
</section>
<section style="padding-bottom: 20px;">
<p>Nota: in caso di abbonameno si intende la data di inizio validità</p>
</section>
<?php endif; ?>
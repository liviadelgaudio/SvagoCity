

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
<?php


    if(isset($_POST['aggiungi'])){
        $idCliente = 2;
        $quantity = $_POST['quantity'];
        // $_SESSION["idCliente"]; va ricavato da variabili della session

        //$result = $dbh->getCurrentCartId($idCliente);
        //if($result!=null){
        //$templateParams["carrello-cliente"] = $dbh->getCurrentCartId($idCliente);
        $cartId = $dbh->getCurrentCartId($idCliente);
        //$rowcount=mysqli_num_rows($result);
        //echo $rowcount;
        //foreach($templateParams["carrello-cliente"] as $cart):
        //if($rowcount>0){
            //$cartId = $templateParams["idCarrello"][0];
            //$cartId = $cart["idCarrello"];
            //$cartId = $result[0]['idCarrello'];
            //echo $cartId;
        //} else {
            //echo "ok";
            //$cartId = $dbh->insertCart($idCliente);
            //echo $cartId;
        //}

        $productId = $ticket["idBiglietto"];
        //$_POST['id'];

        //aggiunge al carrello l'elemento selezionato
        $dbh->addToCart($productId, $cartId, $quantity);
        //endforeach;
    }

?>
<div style="padding: 20px 0;">
    <div class="col-12 col-md-6">
        <div>
            <label>Prezzo: <?php echo $ticket["prezzoBiglietto"] . "€" ;?></label>
        </div>
        <div>
            <label>Per acquistare il biglietto selezionato, compilare i seguenti campi:</label>
        </div>
        <form name="AcquistoBiglietto" METHOD=POST>
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
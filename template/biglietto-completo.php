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
<div>
    <div class="col-12 col-md-6">
        <label>Prezzo: <?php echo $ticket["prezzoBiglietto"] . "€" ;?></label>
        <label>Per acquistare il biglietto selezionato, compilare i seguenti campi:</label>
        <form name="AcquistoBiglietto" METHOD=POST ACTION="acquisto.asp">
            <label>Data:<input type="date" name="day" required/></label>
            
            <label>Quantità:<input type="number" name="quantity" min="1" max="10" required/></label>
            <input type="submit" value="Aggiungi"/>
        </form>
    </div>
    <div class="col-12 col-md-6">
        <p>Si informano i clienti che in fase di acquisto sarà richiesto di inserire i dati dell’intestatario del biglietto, necessari per la verifica dei requisiti di età minima. Al momento dell’ingresso nel parco sarà richiesto un documento d’identità per verificare le informazioni fornite. Qualora si desiderasse cambiare l’intestatario del biglietto, siete pregati di consultare le FAQ riportate <a href="#">qui</a>:</p>
    </div>
</div>
</section>
<section>
<p>Nota: in caso di abbonameno si intende la data di inizio validità</p>
</section>
<?php endif; ?>
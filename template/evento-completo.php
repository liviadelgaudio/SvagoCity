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
        <form name="AcquistoBiglietto" METHOD=POST ACTION="acquisto.asp">
            <div>
            <label>Prezzo: <?php echo $evento["capienzaEvento"] . "€"; ?></label>
            </div>
            <div>
            <label>Quantità:<input type="number" name="quantity" min="1" max="10" required/></label>
            <input type="submit" value="Aggiungi"/>
            </div>
        </form>
    </div>
</div>
</section>

<?php endif; ?>
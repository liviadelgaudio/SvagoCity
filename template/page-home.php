<div class="container-fluid text-center">    

      <div class=" text-center">             
        <h1>Benvenuti!</h1>
        <p>Vieni alla scoperta del parco divertimenti più colorato che ci sia! Ci sono attrazioni per grandi e piccini. Durante la tua visita al parco ci sarà sicuramente qualcuno che ti vorrà conoscere...LA NOSTRA MASCOTTE! Vieni a trovarci, noi e FluffyCandy ti siamo aspettando!</p>
        <hr>
        <h2>Le nostre attrazioni più amate</h2>
        <p>Le nostre attrazioni più visitate sono sicuramente quelle dedicate a FluffyCandy, vieni a scoprirle.</p>
        <h2>Abbonamenti e salta coda</h2>
        <p>Puoi acquistare abbonamenti e salta coda direttamente sul nostro sito senza dover fare la fila all'ingresso il giorno della tua visita al parco.</p>
        <h2>Cosa ne pensano i nostri visitatori</h2>
        <p>Questo è quello che pensano i nostri visitatori..e tu?</p>
        <?php foreach($templateParams["recensione"] as $review):
        $idCliente = $review["codiceCliente"];
        $templateParams["cliente"] = $dbh->getClientById($idCliente);
       foreach($templateParams["cliente"] as $cliente):?>
       <div style="border: 3px solid; border-color: #c27feb; margin: 8px; margin-bottom:20px; padding-bottom: 20px; width:45%; display:inline-block;">
       <h3><?php echo $cliente["nomeCliente"]." ".$cliente["cognomeCliente"] ;
        endforeach; ?></h3>
        <article>
            <label>Valutazione: <?php echo $review["valutazione"]; ?>/5</label>
            <p>"<?php echo $review["testoRecensione"];?>"</p>
        </article>
        </div>
        <?php endforeach; ?>
     </div>

<?php if(isset($_SESSION['idCliente'])){ ?>
<form action="add-recensione.php" method="POST" class="reg" enctype="multipart/form-data">
   <input type="submit" name="aggiungi" value="Scrivi recensione"/>
</form>
<?php }; ?>
 </div>
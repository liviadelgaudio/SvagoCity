<div class="container-fluid text-center">    
     
     <div class=" text-center">             
       <h1>Benvenuti!</h1>
       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
       <hr>
       <h2>Le nostre attrazioni più amate</h2>
       <p>Lorem ipsum...</p>
       <h2>Abbonamenti e salta coda</h2>
       <p>Lorem ipsum...</p>
       <h2>Cosa ne pensano i nostri visitatori</h2>
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
 </div>
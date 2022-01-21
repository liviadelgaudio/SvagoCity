<?php $ticket = $templateParams["biglietto-scelto"];?>
<article>
            <header>
                <h2><?php echo "acquisto di " $ticket["tipologiaBiglietto"];?></h2>
                <p><?php echo "prezzo: " $ticket["prezzo"]; ?></p>
            </header>
        </article>
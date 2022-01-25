<div class="text-center">
<h1>Promozioni attive:</h1>
<?php foreach($templateParams["promo"] as $promo):
?>
<div style="border: 3px solid; border-color: #c27feb; margin: 8px; margin-bottom:20px; padding-bottom: 20px">
    <h2>
        <?php echo $promo["nomePromozione"]; ?>
    </h2>
    <article>
        <?php echo $promo["descrizionePromozione"]; ?>
    </article>
</div>
<?php endforeach; ?>
</div>
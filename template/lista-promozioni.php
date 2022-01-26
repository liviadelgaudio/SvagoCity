<?php
    if(isset($_POST['rimuovi'])){
        $dbh->removePromo($_POST['id']);
        header("location: promozioni.php");
    }
?>

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
    <?php if(isset($_SESSION['codiceAdmin'])){ ?>
        <div>
        <form name="disattivaPromo" METHOD=POST>
            <input type="hidden" name="id" value="<?php echo $promo["idPromozione"] ; ?>" />
            <input type="submit" name="rimuovi" value="Rimuovi promozione"/>
        </form>
        </div>
    <?php }
    endforeach; ?>
</div>
</div>
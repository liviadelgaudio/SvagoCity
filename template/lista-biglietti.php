<div class="text-center">
<h1>Scegli la tipologia di biglietto:</h1>
<?php foreach($templateParams["biglietto"] as $ticket):
    $idBiglietto = $ticket["idBiglietto"];
?>
<h2>
    <a href="<?php echo "template/acquisto-biglietto.php?id=$idBiglietto";?>"><?php echo $ticket["tipologiaBiglietto"]?></a>
</h2>
<?php endforeach; ?>
</div>
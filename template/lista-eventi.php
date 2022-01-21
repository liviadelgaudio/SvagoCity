<div class="text-center">
<h1>Prossimi eventi:</h1>
<?php foreach($templateParams["evento"] as $evento):
    $idEvento = $evento["idEvento"];
?>
<div style="border: 3px solid; border-color: #c27feb; margin: 8px; margin-bottom:20px">
    <h2>
        <?php echo $evento["tipologia"];?>: <?php echo $evento["nomeEvento"]; ?>
    </h2>
    <article>
        <?php echo $evento["descrizioneEvento"]; ?>
        <button><a href="acquisto-evento.php?id=<?php echo "$idEvento";?>">Scopri di più</a></button>
    </article>
</div>
<?php endforeach; ?>
</div>
<?php
    if(isset($_POST['rimuovi'])){
        $dbh->removeEvent($_POST['id']);
        header("location: eventi.php");
    }
?>

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
         <?php if(isset($_SESSION["codiceAdmin"])){ ?>
            <form name="rimuoviEvento" METHOD=POST>
                <input type="hidden" name="id" value="<?php echo $evento["idEvento"] ; ?>" />
                <input type="submit" name="rimuovi" value="Rimuovi"/>
            </form>
        <?php
        } else{ ?>
            <button><a href="acquisto-evento.php?id=<?php echo $idEvento;?>">Scopri di più</a></button> ;
        <?php
        } ?>
    </article>
</div>
<?php endforeach; ?>
</div>
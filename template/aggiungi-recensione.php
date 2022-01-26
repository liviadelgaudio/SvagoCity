<div class="text-center">             
    <h1>Aggiungi una nuova recensione</h1>
    <hr>
</div>
<div class="text-left">
    <form action="processa-recensione.php" method="POST" class="reg" enctype="multipart/form-data"> 
        <label for="testo" class="reglbl">Testo recensione</label>
        <input type="text" id="testo" name="testo" placeholder="Testo recensione" required/>
        <label for="valutazione" class="reglbl">Valutazione</label>
        <input type="number" id="valutazione" name="valutazione" min="1" max="5" placeholder="valutazione"/>
        <input type="submit" name="submit" value="Aggiungi"/>
    </form >
</div>

<style>
            div > form > input{
            margin: 10px 0px;
            width: 43%;
            height: 40px;
            display: block;
          }

         div > form > label{
            margin-left: 15%;
            width: 30%;
            
            display: block;
          }

         div > form {
           margin-left: 38%;
          }
</style>
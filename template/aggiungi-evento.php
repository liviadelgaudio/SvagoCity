<div class="text-center">             
    <h1>Aggiungi un nuovo evento</h1>
    <hr>
</div>
<div class="text-left">
    <form action="processa-evento.php" method="POST" class="reg" enctype="multipart/form-data"> 
        <label for="nome" class="reglbl">Nome evento</label>
        <input type="text" id="nome" name="nome" placeholder="Nome evento" required/>
        <label for="desc" class="reglbl">Descrizione</label>
        <input type="text" id="desc" name="desc" placeholder="Descriozione"/>
        <label for="prezzo" class="reglbl">Prezzo</label>
        <input type="number" id="prezzo" name="prezzo" placeholder="Prezzo"/>
        <label for="capienza" class="reglbl"> Capienza</label>
        <input type="number" id="capienza" name="capienza" placeholder="Capienza" required/>
        <label for="data" class="reglbl">Data evento</label>
        <input type="date" id="data"  name="data" placeholder="Data evento" required/>
        <label for="tipologia" class="reglbl">Tipologia</label>
        <input type="text" id="tipologia" name="tipologia" placeholder="Tipologia" required/>
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
</stryle
<div class="text-center">             
    <h1>Aggiungi una nuova promozione</h1>
    <hr>
</div>
<div class="text-left">
    <form action="processa-promo.php" method="POST" class="reg" enctype="multipart/form-data"> 
        <label for="nome" class="reglbl">Nome promo</label>
        <input type="text" id="nome" name="nome" placeholder="Nome promozione" required/>
        <label for="desc" class="reglbl">Descrizione</label>
        <input type="text" id="desc" name="desc" placeholder="Descriozione"/>
        <label for="sconto" class="reglbl">Sconto</label>
        <input type="number" id="sconto" name="sconto" placeholder="Sconto"/>
        <label for="codice" class="reglbl">Codice Promo</label>
        <input type="text" id="codice" name="codice" placeholder="Codice promozione" required/>
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
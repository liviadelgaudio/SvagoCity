<div>
    <div class="pag col-lg-6 col-md-6 col-12" style="border: 3px solid; border-color: #c27feb; padding: 5px 5px; width: 47%; margin: 10px 10px;">
        <h2>
            Inserisci dati di spedizione
        </h2>
        <form action="#">
            <input type="radio" class="email" id="email" name="email" value="email">
            <label for="email">Via e-mail</label><br>
            <input type="radio" class="ritiro" id="ritiro" name="ritiro" value="ritiro">
            <label for="ritiro">Punto di ritiro</label><br>
            <p class="pritiro">Via dell'Università, 50 Cesena (FC)</p>
            <input type="submit" name="submit" value="Conferma ordine">
        </form>
    </div>
    <div class="col-lg-6 col-md-6 col-12" style="border: 3px solid; border-color: #c27feb; padding: 5px 5px width: 47%; margin: 10px 5px;">
    <h1>Benvenuti!</h1>
       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
       <hr>
       <h2>Le nostre attrazioni più amate</h2>
       <p>Lorem ipsum...</p>
       <h2>Abbonamenti e salta coda</h2>
       <p>Lorem ipsum...</p>
       <h2>Cosa ne pensano i nostri visitatori</h2>
    </div>
</div>


<script>
$(document).ready(function(){
 $(".pritiro").hide();
 $(".ritiro").click(function(){
    $(".pritiro").show();
 });
 $(".email").click(function(){
    $(".pritiro").hide();
 });
});
</script>
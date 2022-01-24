<div>
    <div class="pag col-lg-6 col-md-6 col-12" style="border: 3px solid; border-color: #c27feb; padding: 5px 5px; width: 47%; margin: 10px 10px;">
        <h2>
            Inserisci dati di pagamento
        </h2>
        <form action="spedizione.php">
            <input type="radio" class="carta" id="cartaCredito" name="pagamento" value="cartaCredito">
            <label for="cartaCredito">Carta di Credito</label><br>
            <div class="pcarta" style="border: 3px solid; border-color: #c8e7ff;">
                <label for="carta"  style="margin: 5px 10%">Numero della carta: </label>
                <input type="text" id="carta" name="carta" maxlength="16" placeholder="Numero della carta" style=" margin: 10px 8% " required/><br>
                <label for="nome" style="margin: 10px 10%">Nome sulla carta: </label>
                <input type="text" id="nome" name="nome" placeholder="Nome sulla carta" style="margin: 10px 10% " required/><br>
                <label for="cvv" style="margin: 10px 10%">CVV: </label>
                <input type="text" id="cvv" name="cvv" placeholder="CVV" maxlength="3"style=" margin: 10px 10% 10px 25%" required/>
            </div>
            <input type="radio" class="altro" id="consegna" name="pagamento" value="contrassegno">
            <label for="consegna">Contrassegno</label><br>
            <input type="radio" class="bonifico" id="bonifico" name="pagamento" value="bonifico">
            <label for="bonifico">Bonifico Bancario</label><br>
            <p class="pbonifico">IBAN: IT 89 H 379992784721937</p>
            <input type="submit" name="submit" value="Vai alla Spedizione">
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
 $(".pcarta").hide();
 $(".pbonifico").hide();
 $(".carta").click(function(){
    $(".pcarta").show();
 });
 $(".bonifico").click(function(){
    $(".pbonifico").show();
 });
 $(".altro").click(function(){
    $(".pcarta").hide();
    $(".pbonifico").hide();
 });
});



</script>

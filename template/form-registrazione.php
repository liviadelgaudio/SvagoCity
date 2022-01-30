<div class="text-center">             
            <h1>UNISCITI A NOI...</h1>
            <h2>...Entra anche tu nel magico mondo di <p class="h2 fluffy" style="display: inline;">Fluffy Candy.</h2></p>
            <hr>
          </div>
          <?php if(isset($templateParams["errorelogin"])): ?>
            <p><?php echo $templateParams["errorelogin"]; ?></p>
            <?php endif; ?>
          <div class="text-left">
              <form action="processa.php" method="POST" class="reg" enctype="multipart/form-data"> 
                <label for="email" class="reglbl">Indirizzo mail</label>
                <input type="email" id="email" name="email" placeholder="Indirizzo mail" class="registrazione" required/>
                <label for="password" class="reglbl"> Password</label>
                <input type="password" id="password" name="password" onkeyup="validator()"  placeholder="Password" class="registrazione" required/>
                <div id="ProgressBar">
                  <div id="bar">
                    <p id="alert">
                    </p>
                  </div>
                  </div><br>
                <label for="nome" class="reglbl">Nome</label>
                <input type="text" id="nome" name="nome" placeholder="Nome" class="registrazione"/>
                <label for="cognome" class="reglbl">Cognome</label>
                <input type="text" id="cognome" name="cognome" placeholder="Cognome" class="registrazione"/>
                <label for="dataNascita" class="reglbl">Data di Nascita</label>
                <input type="date" id="dataNascita"  name="dataNascita" value="Data di Nascita" placeholder="Data di Nascita" class="registrazione" required/>
                <label for="indirizzo" class="reglbl">Indirizzo</label>
                <input type="text" id="indirizzo" name="indirizzo" placeholder="Via, Civico Citta Provincia" class="registrazione" required/>
                <input type="submit" name="submit" value="Invia" class="registrazione"/>
              </form >
          </div>
          <style>
            div > form > input{
            margin: 10px 0px;
            width: 43%;
            height: 40px;
            display: block;
          }
          
          #indirizzo{
            margin-bottom: 20px;
          }

         div > form > label{
            margin-left: 15%;
            width: 30%;
            
            display: block;
          }

         div > form {
           margin-left: 38%;
          }

          #ProgressBar {
            width: 100%%;
            background-color: #ddd;
            max-width:343px;
          }
          #bar {
            width: 1%;
            height: 10px;
            background-color: #4CAF50;
            max-width:343px;
          }
          #password {
            margin: 10px 0px;
            width: 43%;
            height: 40px;
            display: block;
          }
          #alert {
            font-weight:bold;
            text-align:center;
          }

          @media screen and (max-width: 767px) {

          div > form > input{
          margin: 10px 0px;
          width: 70%;
          height: 40px;
          display: block;
          }

          div > form > label{
          margin-left: 25%;
          width: 30%;

          display: block;
          }

          div > form {
          margin-left: 22%;
          }

          #ProgressBar {
          width: 100%%;
          background-color: #ddd;
          max-width:274px;
          }
          #bar {
          width: 1%;
          height: 10px;
          background-color: #4CAF50;
          max-width:274px;
          }

          #password {
          margin: 10px 0px;
          width: 70%;
          height: 40px;
          display
          }
          }
        </style>

<script>
function validator() {
  var x = 0;
  var password = document.getElementById('password').value;
  var bar = document.getElementById("bar");
  var al = document.getElementById("alert");

  //controllo numeri
  var check=/[0-9]/;
  if(check.test(password)){
    x = x + 20;
  }
  //controllo minuscole
  var check2=/[a-z]/;
  if(check2.test(password)){
    x = x + 20;
  }
  //controllo maiuscole
  var check3=/[A-Z]/;
  if(check3.test(password)){
    x = x + 20;
  }
  //controllo simboli
  var check4=/[$-/:-?{-~!"^_`\[\]]/;
  if(check4.test(password)){
    x = x + 20;
  }
  // controllo lunghezza (minore o uguale a 7 caratteri)
  if(password.length >=7){
    x = x + 20;
  }

  // risultato
  bar.style.width = x + "%";
  // voto massimo 100
  if (x == 100) {
    bar.style.backgroundColor = "green";
    al.innerHTML = "Very strong";
  }
  if (x >60) {
    bar.style.backgroundColor = "green";
    al.innerHTML = "Strong";
  }
  if (x <=40) {
    bar.style.backgroundColor = "yellow";
    al.innerHTML = "Good";
  }
  //voto minimo 20
  if (x <=20) {
    bar.style.backgroundColor = "red";
    al.innerHTML = "Weak";
  }

  if(password.length == 0){
    x == 0;
    al.innerHTML = "";
  }

  //controllo spazi bianchi
  var check5=/\s\S/;
  if(check5.test(password)){
    al.innerHTML = "Password must not contain white spaces";
    bar.style.backgroundColor = "red";
  }
}
</script>
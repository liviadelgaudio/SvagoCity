<!DOCTYPE html>
<html lang="it">
  <head>
    <title>SvagoCity</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="svagocity.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
      <button type="button" class="btn glyphicon glyphicon-remove"></button>
      <header class="h2">Entra nel magico mondo di </header><p class="h2 fluffy" style="display: inline;">Fluffy Candy.</p>
      <div>
        <form action="#" method="POST">
          <?php if(isset($templateParams["errorelogin"])): ?>
            <p><?php echo $templateParams["errorelogin"]; ?></p>
            <?php endif; ?>
          <label for="email">Indirizzo mail</label>
          <input type="email" id="email" name="email" placeholder="Indirizzo mail" style="display: block;"/>
          <label for="pass">Password</label>
          <input type="password" id="pass" name="password" placeholder="Password" style="display: block;"/>
          <input type="submit" name="submit" value="Invia" />
        </form>
        <a href="registrazione.php">Vuoi registrarti?</a>
      </div>
    </div>
    <div class="box-container"> 
      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#MenuNavBar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-brand" href="#">SvagoCity</a>
           </div>
           <div class="collapse navbar-collapse" id="MenuNavBar">
             <ul class="nav navbar-nav">
             <li><a <?php isActive("home.php");?> href="home.php">Home</a></li>
               <li>
                 <div class="dropdown">
                 <button class="dropbtn" <?php isActive("biglietti.php");?> <?php isActive("eventi.php");?> 
                 <?php isActive("prodotti.php");?> <?php isActive("index.php");?>>Acquista 
                   <em class="fa fa-caret-down"></em>
                 </button>
                 <div class="dropdown-content">
                  <a href="biglietti.php">Biglietti</a>
                  <a href="eventi.php">Eventi</a>
                  <a href="prodotti.php">Prodotti</a>
                   <a href="promozioni.php">Promozioni</a>
                 </div>
               </li> 
               <li><a <?php isActive("calendario.php");?> href="calendario.php">Calendario</a></li>
               <li><a <?php isActive("info.php");?> href="info.php">Info</a></li>
               <li><a <?php isActive("contatti.php");?> href="contatti.php">Contatti</a></li>
             </ul>
             <ul class="nav navbar-nav navbar-right">
               <li><a class="login" href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
              <li><a <?php isActive("carrello.php");?> href="carrello.php"><span class="glyphicon glyphicon-shopping-cart"></span> Carrello</a></li>
            </ul>
          </div>
        </div>
      </nav>
      <main>
        <?php require($templateParams["nome"]) ?>
      </main>
      
      <footer class="container-fluid text-center col-12 col-md-12">
        <div>
            <div>
                <p> 
                    Informazioni aziendali
                </p>
            </div>
            <div class= "col-12 col-md-6">
                <ul>
                    <li>Covid19-info</li>
                    <li>Lavora con noi</li>
                    <li>FAQ</li>
                    <li>Chi siamo</li>
                    <li>Privacy&Cookies</li>
                </ul>
            </div>
            <div class="col-12 col-md-6">
                <p></p>
                <p>Parco divertimenti SvagoCity</p>
                <p> Via della Sedie Volanti 45, Bosco dei Cento Acri 43256 </p>
                <p>P.IVA: 05984912750</p>   
            </div>
         </div>
      </footer>
    </div>
  </body>
</html>
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
                <input type="email" id="email" name="email" placeholder="Indirizzo mail" class="registrazione"/>
                <label for="password" class="reglbl"> Password</label>
                <input type="password" id="password" name="password" placeholder="Password" class="registrazione"/>
                <label for="nome" class="reglbl">Nome</label>
                <input type="text" id="nome" name="nome" placeholder="Nome" class="registrazione"/>
                <label for="cognome" class="reglbl">Cognome</label>
                <input type="text" id="cognome" name="cognome" placeholder="Cognome" class="registrazione"/>
                <label for="dataNascita" class="reglbl">Data di Nascita</label>
                <input type="date" id="dataNascita"  name="dataNascita" value="Data di Nascita" placeholder="Data di Nascita" class="registrazione"/>
                <label for="indirizzo" class="reglbl">Indirizzo</label>
                <input type="text" id="indirizzo" name="indirizzo" placeholder="Via, Civico Citta Provincia" class="registrazione"/>
                <input type="submit" name="submit" value="Invia" class="registrazione"/>
              </form >
          </div>
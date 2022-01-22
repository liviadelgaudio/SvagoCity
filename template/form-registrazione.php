<div class="text-center">             
            <h1>UNISCITI A NOI...</h1>
            <h2>...Entra anche tu nel magico mondo di <p class="h2 fluffy" style="display: inline;">Fluffy Candy.</h2></p>
            <hr>
          </div>
          <?php if(isset($templateParams["errorelogin"])): ?>
            <p><?php echo $templateParams["errorelogin"]; ?></p>
            <?php endif; ?>
          <div class="text-left">
              <form action="#" method="POST" class="reg">
                <label for="email" class="reglbl">Indirizzo mail</label>
                <input type="email" id="email" placeholder="Indirizzo mail" class="registrazione"/>
                <label for="password" class="reglbl"> Password</label>
                <input type="password" id="password" placeholder="Password" class="registrazione"/>
                <label for="nome" class="reglbl">Nome</label>
                <input type="text" id="nome" placeholder="Nome" class="registrazione"/>
                <label for="cognome" class="reglbl">Cognome</label>
                <input type="text" id="cognome" placeholder="Cognome" class="registrazione"/>
                <label for="dataNascita" class="reglbl">Data di Nascita</label>
                <input type="date" id="dataNascita"  value="Data di Nascita" placeholder="Data di Nascita" class="registrazione"/>
                <label for="indirizzo" class="reglbl">Indirizzo</label>
                <input type="text" id="indirizzo" placeholder="Via, Civico Citta Provincia" class="registrazione"/>
                <input type="submit" name="submit" value="Invia" class="registrazione"/>
              </form >
          </div>

          <style>
            .registrazione{
            margin: 10px 0px;
            width: 43%;
            height: 40px;
            display:block;
          }
          
          #indirizzo{
            margin-bottom: 20px;
          }

          .reglbl{
            margin-left: 15%;
            width: 30%;
            display: block;
          }

          .reg {
           margin-left: 37%;
          }
          </style>
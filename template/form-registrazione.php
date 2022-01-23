<div class="text-center">             
            <h1>UNISCITI A NOI...</h1>
            <h2>...Entra anche tu nel magico mondo di <p class="h2 fluffy" style="display: inline;">Fluffy Candy.</h2></p>
            <hr>
          </div>
          <?php if(isset($templateParams["errorelogin"])): ?>
            <p><?php echo $templateParams["errorelogin"]; ?></p>
            <?php endif; ?>
          <div class="text-left">
              <form action="#" method="POST">
                <label for="email">Indirizzo mail</label>
                <input type="email" id="email" placeholder="Indirizzo mail" />
                <label for="password">Password</label>
                <input type="password" id="password" placeholder="Password"/>
                <label for="nome">Nome</label>
                <input type="text" id="nome" placeholder="Nome"/>
                <label for="cognome">Cognome</label>
                <input type="text" id="cognome" placeholder="Cognome"/>
                <label for="dataNascita">Data di Nascita</label>
                <input type="date" id="dataNascita"  value="Data di Nascita" placeholder="Data di Nascita"/>
                <label for="indirizzo">Indirizzo</label>
                <input type="text" id="indirizzo" placeholder="Via, Civico Citta Provincia" />
              </form >
          </div>
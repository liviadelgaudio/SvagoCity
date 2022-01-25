<?php

class DatabaseHelper{
    private $db;

    public function __construct($servername, $username, $password, $dbname, $port){
        //connessione al db
        $this->db = new mysqli($servername, $username, $password, $dbname, $port);
        if($this->db->connect_error){
            die("Connessione al db fallita");
        }
    }

    public function getTickets(){
        $stmn = $this->db->prepare("SELECT idBiglietto, tipologiaBiglietto
        FROM biglietto");
        $stmn->execute();
        $result = $stmn->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }
    
    public function getTicketById($idBiglietto){
        $stmn = $this->db->prepare("SELECT idBiglietto, tipologiaBiglietto, prezzoBiglietto
        FROM biglietto WHERE idBiglietto=?");
        $stmn->bind_param("i", $idBiglietto);
        $stmn->execute();
        $result = $stmn->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getEvents(){
        $stmn = $this->db->prepare("SELECT idEvento, nomeEvento, descrizioneEvento, tipologia
        FROM evento");
        $stmn->execute();
        $result = $stmn->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getEventById($idEvento){
        $stmn = $this->db->prepare("SELECT idEvento, nomeEvento, descrizioneEvento, tipologia, dataEvento, capienzaEvento, prezzo
        FROM evento WHERE idEvento=?");
        $stmn->bind_param("i", $idEvento);
        $stmn->execute();
        $result = $stmn->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getProductsType(){
        $stmn = $this->db->prepare("SELECT DISTINCT nomeProdotto
        FROM prodotto");
        $stmn->execute();
        $result = $stmn->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getProductDescr($nomeProdotto){
        $stmn = $this->db->prepare("SELECT DISTINCT descrizioneProdotto, prezzoProdotoo, imgProdotto
        FROM prodotto WHERE nomeProdotto=?");
        $stmn->bind_param("s", $nomeProdotto);
        $stmn->execute();
        $result = $stmn->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }  

    //dato un prodotto, estrae i colori disponibili
    public function getProductColors($nomeProdotto){
        $stmn = $this->db->prepare("SELECT DISTINCT coloreProdotto
        FROM prodotto WHERE nomeProdotto=?");
        $stmn->bind_param("s", $nomeProdotto);
        $stmn->execute();
        $result = $stmn->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    //dato un prodotto in un colore, estrae le taglie disponibili
    public function getProductSizes($nomeProdotto, $coloreProdotto){
        $stmn = $this->db->prepare("SELECT tagliaProdotto
        FROM prodotto WHERE nomeProdotto=? AND coloreProdotto=?");
        $stmn->bind_param("ss", $nomeProdotto, $coloreProdotto);
        $stmn->execute();
        $result = $stmn->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getProductId($nomeProdotto, $coloreProdotto, $tagliaProdotto){
        $stmn = $this->db->prepare("SELECT idProdotto
        FROM prodotto WHERE nomeProdotto=? AND coloreProdotto=? AND tagliaProdotto=?");
        $stmn->bind_param("sss", $nomeProdotto, $coloreProdotto, $tagliaProdotto);
        $stmn->execute();
        $result = $stmn->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getProductById($idProdotto){
        $stmn = $this->db->prepare("SELECT *
        FROM prodotto WHERE idProdotto=?");
        $stmn->bind_param("i", $idProdotto);
        $stmn->execute();
        $result = $stmn->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getPromos(){
        $stmn = $this->db->prepare("SELECT nomePromozione, descrizionePromozione
        FROM promozione");
        $stmn->execute();
        $result = $stmn->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getReviews($n=-1){
        $query = "SELECT *
         FROM recensione ORDER BY RAND()";
        if($n > 0){
            $query .= " LIMIT ?";
        }
        $stmt = $this->db->prepare($query);
        if($n > 0){
            $stmt->bind_param('i',$n);
        }
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getClientById($idCliente){
        $stmt = $this->db->prepare("SELECT nomeCliente, cognomeCliente 
        FROM cliente WHERE idCliente=?");
        $stmt->bind_param('i',$idCliente);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    //Registrazione nuovo cliente
    public function insertClient($nomeCliente, $cognomeCliente, $emailCliente, $passwordCliente, $dataNascitaCliente, $indirizzoCliente){
        $query = "INSERT INTO cliente (nomeCliente, cognomeCliente, emailCliente, passwordCliente, dataNascitaCliente, indirizzoCliente) VALUES (?, ?, ?, ?, ?, ?)";
        $stmn = $this->db->prepare($query);
        $stmn->bind_param('ssssss',$nomeCliente, $cognomeCliente, $emailCliente, $passwordCliente, $dataNascitaCliente, $indirizzoCliente);
        $stmn->execute();

        return $stmn->insert_id;
    }

    //Controllo Login
    public function checkLoginClient($email, $password){
        $query = "SELECT idCliente, emailCliente, nomeCliente, cognomeCliente FROM cliente WHERE emailCliente = ? AND passwordCliente = ?";
        $stmn = $this->db->prepare($query);
        $stmn->bind_param('ss',$email, $password);
        $stmn->execute();
        $result = $stmn->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }
    
    public function checkLoginAdmin($email, $password){
        $query = "SELECT codiceAdmin, email, nome, cognome 
        FROM admin WHERE email = ? AND password = ?";
        $stmn = $this->db->prepare($query);
        $stmn->bind_param('ss',$email, $password);
        $stmn->execute();
        $result = $stmn->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getCurrentCartId($idCliente){
        $result = $this->db->query("SELECT *
        FROM carrello WHERE codiceCliente = $idCliente");
        $rowcount=mysqli_num_rows($result);
        if($rowcount>0){
            $templateParams["carrello-cliente"] = $result->fetch_all(MYSQLI_ASSOC);
            foreach($templateParams["carrello-cliente"] as $cart):
                $cartId = $cart['idCarrello'];
            endforeach;
        } else{
            $cartId = $this->insertCart($idCliente);
        }

        return $cartId;
    }

    public function insertCart($idCliente=-1){
        $query = "INSERT INTO carrello (codiceCliente) VALUES (?)";
        $stmn = $this->db->prepare($query);
        $stmn->bind_param('i',$idCliente);
        $stmn->execute();

        return $stmn->insert_id;
    }

    public function insertProdIntoCart($idCarrello, $idProdotto, $quantità, $tipologia, $prezzo, $data){
        echo $data;
        if($data == NULL){
            $query = "INSERT INTO prodotto_in_carrello (idCarrello, idProdotto, quantità, tipologia, prezzoUnitario, dataUtilizzo) VALUES (?, ?, ?, ?, ?, ?)";
            $stmn = $this->db->prepare($query);
            $stmn->bind_param('iiisid',$idCarrello, $idProdotto, $quantità, $tipologia, $prezzo, $data);
        } else{
            $query = "INSERT INTO prodotto_in_carrello (idCarrello, idProdotto, quantità, tipologia, prezzoUnitario, dataUtilizzo) VALUES (?, ?, ?, ?, ?, '$data')";
            $stmn = $this->db->prepare($query);
            $stmn->bind_param('iiisi',$idCarrello, $idProdotto, $quantità, $tipologia, $prezzo);
        }
        $stmn->execute();

        return $stmn->insert_id;
    }

    public function addToCart($cartId, $productId, $quantity=1, $tipologia, $prezzo, $data){
        $result = $this->db->query("SELECT quantità
        FROM prodotto_in_carrello WHERE tipologia = '$tipologia' AND idCarrello = $cartId AND idProdotto = $productId");
        $rowcount = mysqli_num_rows($result);
        if($rowcount > 0){
            $templateParams["quantità-prodotto"] = $result->fetch_all(MYSQLI_ASSOC);
            foreach($templateParams["quantità-prodotto"] as $qp):
                $quantity += $qp['quantità'] ;
            endforeach;
            $stmt = "UPDATE prodotto_in_carrello SET quantità =  $quantity
            WHERE idProdotto = $productId AND idCarrello = $cartId";
            $stmn = $this->db->query($stmt);
        } else{
            $this->insertProdIntoCart($cartId, $productId, $quantity, $tipologia, $prezzo, $data);
        }
    }

    public function getCartItems($cartId){
        $stmt = $this->db->prepare("SELECT * 
        FROM prodotto_in_carrello WHERE idCarrello = ?");
        $stmt->bind_param('i',$cartId);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function removeItemFromCart($itemInCartId){
        $stmt = $this->db->prepare("DELETE 
        FROM prodotto_in_carrello WHERE id = ?");
        $stmt->bind_param('i',$itemInCartId);
        $stmt->execute();
    
    }


    public function addNotificationForClient($idCliente, $date, $descrizione) {
        $query = "INSERT INTO notificaCliente(codiceCliente, `data`, descrizione) VALUES (?, ?, ?)";
        $stmn = $this->db->prepare($query);
        $stmn->bind_param('iss', $idCliente, $date, $descrizione);
        $stmn->execute();

        return $stmn->execute();
    }

    public function getUserNotifications($codiceCliente){
        $stmt = $this->db->prepare("SELECT * 
        FROM notificaCliente WHERE codiceCliente = ? ORDER BY data DESC LIMIT 10");
        $stmt->bind_param('i',$codiceCliente);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }


    public function addNotificationForAdmin($idAdmin=1, $date, $descrizione){
        $query = "INSERT INTO notificaAdmin(codiceAdmin, `data`, descrizione) VALUES (?, ?, ?)";
        $stmn = $this->db->prepare($query);
        $stmn->bind_param('iss', $idAdmin, $date, $descrizione);
        $stmn->execute();
    }

    public function getAdminNotifications($codiceAdmin){
        $stmt = $this->db->prepare("SELECT * 
        FROM notificaAdmin WHERE codiceAdmin = ? ORDER BY data DESC");
        $stmt->bind_param('i',$codiceAdmin);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getOrdineById($codiceCliente){
        $stmt = $this->db->prepare("SELECT idOrdine, dataOrdine, statoOrdine
        FROM ordine WHERE codiceCliente = ?");
        $stmt->bind_param('i',$codiceCliente);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getOrdine(){
        $stmt = $this->db->prepare("SELECT idOrdine, codiceCliente, dataOrdine, statoOrdine
        FROM ordine");
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function updateOrderStatus($stato, $idOrdine){
        $stmt = $this->db->prepare("UPDATE ordine SET statoOrdine = ?
            WHERE idOrdine = ?");
        $stmt->bind_param('si', $stato, $idOrdine);
        return $stmt->execute();
    }

    public function pulisciCarrello($idCarrello){
        $stmt = $this->db->prepare("DELETE 
        FROM prodotto_in_carrello WHERE idCarrello = ?");
        $stmt->bind_param('i',$itemInCartId);
        $stmt->execute();

    public function newOrder($codiceCliente, $codiceCarrello, $dataOrdine, $metodoPagamento){
        $statoOrdine="in attesa";
        $stmt = $this->db->prepare("INSERT INTO ordine VALUES (?, ?, '$dataOrdine', ?, ?)");
        $stmt->bind_param('iiss',$codiceCliente, $codiceCarrello, $metodoPagamento, $statoOrdine);
        $stmt->execute();
        
    }

    public function clientCart($idCarrello, $idCliente){
        $stmt = $this->db->prepare("UPDATE carrello SET codiceCliente = ? WHERE idCarrello = ?");
        $stmt->bind_param('ii',$idCliente, $idCarrello);
        return $stmt->execute();
      

    }

    public function getCartById($idCliente){
        $stmt = $this->db->prepare("SELECT idCarrello
        FROM carrello  WHERE codiceCliente = ? ORDER BY idCarrello DESC LIMIT 1 ");
        $stmt->bind_param('i',$idCliente);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
        
    }
}

//query che per un dato utente deve trovare le notifiche che hanno già trascorso il tempo (data notifica<now)
//e mi ritorna tutte le notifiche che gli sono arrivate
//così stampo le notifiche dentro ajax con polling e quando le ho lette devo cancellarle


//prima di procedere la pagamento si deve loggare - update di carrello con id cliente
?>



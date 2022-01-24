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
        $stmn->bind_param('ssssds',$nomeCliente, $cognomeCliente, $emailCliente, $passwordCliente, $dataNascitaCliente, $indirizzoCliente);
        $stmn->execute();

        return $stmn->insert_id;
    }

    //Controllo Login
    public function checkLogin($email, $password){
        $query = "SELECT idCliente, emailCliente, nomeCliente FROM cliente WHERE emailCliente = ? AND passwordCliente = ?";
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
            $query = "INSERT INTO prodotto_in_carrello (idCarrello, idProdotto, quantità, tipologia, prezzoUnitario, dataUtilizzio) VALUES (?, ?, ?, ?, ?, ?)";
            $stmn = $this->db->prepare($query);
            $stmn->bind_param('iiisid',$idCarrello, $idProdotto, $quantità, $tipologia, $prezzo, $data);
        } else{
            $query = "INSERT INTO prodotto_in_carrello (idCarrello, idProdotto, quantità, tipologia, prezzoUnitario, dataUtilizzio) VALUES (?, ?, ?, ?, ?, '$data')";
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
                echo "quantità aggiornata: " . $quantity;
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

    public function removeItemFromCart($cartId, $productId){
        $stmt = $this->db->prepare("DELETE * 
        FROM prodotto_in_carrello WHERE idCarrello = ? AND idProdotto = ?");
        $stmt->bind_param('ii',$cartId, $productId);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }
    
}


?>
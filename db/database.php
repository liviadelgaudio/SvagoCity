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
        $stmn = $this->db->prepare("SELECT tipologiaBiglietto, prezzoBiglietto
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

}


?>
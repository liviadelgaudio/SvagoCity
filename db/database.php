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
        $stmn = $this->db->prepare("SELECT idEvento, nomeEvento, descrizioneEvento, tipologia, dataEvento, capienzaEvento
        FROM evento WHERE idEvento=?");
        $stmn->bind_param("i", $idEvento);
        $stmn->execute();
        $result = $stmn->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    //getEvents

    //getTicketsCategories

    //getTicket

    //getProducts -> forse da gestire anche group by oppure fare get diversi

    //getPromos

    //Registrazione nuovo cliente
    public function insertClient($nomeCliente, $cognomeCliente, $emailCliente, $passwordCliente, $dataNascitaCliente, $indirizzoCliente){
        $query = "INSERT INTO cliente (nomeCliente, cognomeCliente, emailCliente, passwordCliente, dataNascitaCliente, indirizzoCliente) VALUES (?, ?, ?, ?, ?, ?)";
        $stmn = $this->db->prepare($query);
        $stmn->bind_param('ssssds',$nomeCliente, $cognomeCliente, $emailCliente, $passwordCliente, $dataNascitaCliente, $indirizzoCliente);
        $stmn->execute();

        return $stmn->insert_id;
    }

    //Controllo Login
    public function checkLogin($emailCliente, $passwordCliente){
        $query = "SELECT idCliente, emailCliente, nomeCliente FROM cliente WHERE attivo=1 AND emailCliente = ? AND passwordCliente = ?";
        $stmn = $this->db->prepare($query);
        $stmn->bind_param('ss',$emailCliente, $passwordCliente);
        $stmn->execute();
        $result = $stmn->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }    

}


?>
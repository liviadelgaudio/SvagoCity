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


}

?>
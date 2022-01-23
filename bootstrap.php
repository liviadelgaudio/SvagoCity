<?php
    session_start();
//file condiviso da tutte le pagine, quindi inseriamo risorse accessibili a tutte

    //includere il file per connessione db
    require_once("db/database.php");

    //istanziare helper per db
    $dbh = new DatabaseHelper("localhost", "root", "", "svagocity", 3305); //mettiamo nome db qui (non necess) per evitare tutte le volte di eseguire query con db.query


?>
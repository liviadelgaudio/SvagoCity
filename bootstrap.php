<?php
    session_start();

    define("LOGIN", "glyphicon glyphicon-log-in");
    define("LOG", "Login");
//file condiviso da tutte le pagine, quindi inseriamo risorse accessibili a tutte

    //includere il file per connessione db
    require_once("db/database.php");

    //istanziare helper per db
    $dbh = new DatabaseHelper("localhost", "root", "", "svagocity", 3306); //mettiamo nome db qui (non necess) per evitare tutte le volte di eseguire query con db.query

    require_once("utils/functions.php")

?>

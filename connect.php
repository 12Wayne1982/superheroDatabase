<?php
    /* Daten des MySQL-Servers */
        $server = "localhost";
        $user = "root";
        $passwort = "";
        $datenbank = "superherodb";
        error_reporting(E_ERROR | E_WARNING | E_PARSE);

    $conn = mysqli_connect($server, $user, $passwort, $datenbank) 
            or die ("<H3>Datenbankserver nicht erreichbar.</H3>");
            
    mysqli_set_charset($conn, "utf8");
    mysqli_select_db($conn, $datenbank) or die ("<H3>Datenbank nicht vorhanden.</H3>");
?>
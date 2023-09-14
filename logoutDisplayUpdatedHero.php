<?php
    session_start();
    // kill variable values
    session_unset();
    // kill session 
    session_destroy();
    // Weiterleitung zu einer gewünschten Seite
    header('location:menuPage.php');
?>
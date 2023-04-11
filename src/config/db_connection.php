<?php
    $hostname = "localhost";
    $username = "root";
    $password = "root";
    $database = "cloud_computing";
    $port = "3306";
    
    $conn = new mysqli($hostname, $username, $password, $database, $port);
    if ($conn->connect_error) 
        die("Connessione fallita: " . $conn->connect_error);
?>
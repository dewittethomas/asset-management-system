<?php
    $hostname = "localhost";
    $db_username = "root";
    $db_password = "";
    $database = "assetsdb";

    $conn = new mysqli(hostname: $hostname, 
                       username: $db_username, 
                       password: $db_password, 
                       database: $database);

    // Check connection
    if ($conn -> connect_error) {
        die("Connection failed: " . $conn -> connect_error);
    }
?>
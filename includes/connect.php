<?php
    $hostname = "";
    $db_username = "";
    $db_password = "";
    $database = "";

    $conn = new mysqli(hostname: $hostname, 
                       username: $db_username, 
                       password: $db_password, 
                       database: $database);

    // Check connection
    if ($conn -> connect_error) {
        die("Connection failed: " . $conn -> connect_error);
    }
?>
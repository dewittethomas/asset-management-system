<?php 
    require "connect.php";

    if (isset($_GET["serial"])) {
        $serial_number = $_GET["serial"];

        $stmt = $conn -> prepare("DELETE FROM assets WHERE serial_number=?");
        $stmt -> bind_param("s", $serial_number);
        $stmt -> execute();
        
        $stmt -> close();
    }

    header("Location: ../index.php");
    exit;
?>
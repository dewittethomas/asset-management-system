<?php
    require "connect.php";

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        function format($serial_number) {
            return (strlen($serial_number) === 1) ? "0{$serial_number}" : $serial_number;
        }

        $serial_date = date("ymd");

        $sql = "SELECT COUNT(*) as count FROM assets WHERE serial_number LIKE '{$serial_date}%'";

        $result = $conn -> query($sql);
        $row = $result -> fetch_assoc();
        $count = $row["count"] + 1;

        $name = $_POST["name"];
        $owner_username = $_SESSION["username"];
        $activation_date = date("Y-m-d");
        $serial_number =  $serial_date . "-" . format($count);
        
        $stmt = $conn -> prepare("INSERT INTO assets VALUES (?, '$owner_username', '$activation_date', '$serial_number')");
        $stmt -> bind_param("s", $name);
        $stmt -> execute();
        
        $stmt -> close();
    }

    $conn -> close();
?>
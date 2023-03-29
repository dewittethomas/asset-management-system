<?php
    require "connect.php";

    $file = "assets_" . date("Y-m-d") . ".csv";

    $query = "SELECT * FROM assets ORDER BY serial_number DESC";

    $result = mysqli_query($conn, $query);
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $file . '"');

    $f = fopen('php://output', 'w');

    $headers = array("Naam", "Eigenaar", "Datum van activatie", "Serienummer"); 

    fputcsv($f, $headers);

    foreach ($rows as $row) {
        fputcsv($f, $row);
    }

    fclose($f);

    exit;
?>
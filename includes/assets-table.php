<?php 
    require "connect.php";

    $sql = "SELECT * FROM assets ORDER BY serial_number DESC";
    $result = mysqli_query($conn, $sql);

    $empty = true;

    if ($result -> num_rows > 0 ) {
        $empty = false;
    }
?>
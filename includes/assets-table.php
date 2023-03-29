<?php 
    require "connect.php";

    $sql = "SELECT * FROM assets ORDER BY serial_number DESC";
    $result = mysqli_query($conn, $sql);
?>
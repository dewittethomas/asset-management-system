<?php 
    require "connect.php";

    $sql = "SELECT * FROM assets";
    $result = mysqli_query($conn, $sql);
?>
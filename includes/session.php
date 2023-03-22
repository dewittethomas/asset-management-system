<?php
    session_start();

    if (isset($_SESSION["username"])) {
        $username = $_SESSION["username"];
    } else {
        header("Location: login.php");
        exit;
    }
?>
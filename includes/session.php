<?php
    $loggedIn = false;

    session_start();

    if (isset($_SESSION['username'])) {
        $username = $_SESSION["username"];
        $loggedIn = true;
    } else {
        header("Location: login.php");
        exit;
    }
?>
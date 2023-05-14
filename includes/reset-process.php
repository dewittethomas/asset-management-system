<?php
    require "connect.php";

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $is_found = false;

        $username = $_POST["username"];
        $password_hash = password_hash($_POST["new-password"], PASSWORD_DEFAULT);

        $stmt = $conn -> prepare("UPDATE users SET password_hash = ? WHERE username = ?");
        $stmt -> bind_param("ss", $password_hash, $username);
        $stmt -> execute();

        if ($stmt -> affected_rows === 1) {
            $is_found = true;
        } 

        $stmt -> close();
    }

    $conn -> close();
?>
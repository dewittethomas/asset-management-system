<?php
    require "connect.php";

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $is_found = false;
        $is_identical = false;

        $username = $_POST["username"];
        $new_password = $_POST["new-password"];

        $stmt = $conn -> prepare("SELECT password_hash FROM users WHERE username = ?");
        $stmt -> bind_param("s", $username);
        $stmt -> execute();
        $stmt -> bind_result($current_password_hash);
        $stmt -> fetch();
        $stmt -> close();

        if (!password_verify($new_password, $current_password_hash)) {
            $new_password_hash = password_hash($new_password, PASSWORD_DEFAULT);

            $stmt = $conn -> prepare("UPDATE users SET password_hash = ? WHERE username = ?");
            $stmt -> bind_param("ss", $new_password_hash, $username);
            $stmt -> execute();

            if ($stmt -> affected_rows === 1) {
                $is_found = true;
            }

            $stmt -> close();
        } else {
            $is_identical = true;
        }
    }

    $conn -> close();
?>
<?php
    require "connect.php";

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $is_invalid = true;
        session_start();

        $username = $_POST["username"];
        $password = $_POST["password"];
        
        $stmt = $conn -> prepare("SELECT * FROM users WHERE username = ?");
        $stmt -> bind_param("s", $username);
        $stmt -> execute();
        $result = $stmt -> get_result();
    
        if ($result -> num_rows === 1) {
            $row = $result -> fetch_assoc();

            if (password_verify($password, $row["password_hash"])) {
                $is_invalid = false;

                $_SESSION["username"] = $username;

                header("Location: index.php");
                exit;
            }
        } else if ($is_invalid) {
            $_SESSION["incorrect_username"] = $username;
        }

        $stmt -> close();
    }

    $conn -> close();
?>
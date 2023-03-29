<?php
    require "includes/reset-process.php";
?>
<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles/main.css">
        <title>Asset Management Systeem - Wachtwoord vergeten</title>
    </head>

    <body>
        <nav>
            <div class="nav-container">
                <h1 class="logo">Asset Management Systeem</h1>
                <ul class="nav-links">
                    <li><a href="login.php">Inloggen</a></li>
                </ul>
            </div>
        </nav>

        <div class="main-container">
            <?php if ($_SERVER["REQUEST_METHOD"] === "POST" && $is_found): ?>
            <div class="status success">
                <p>Uw wachtwoord is succesvol aangepast!</p>
            </div>
            <?php elseif ($_SERVER["REQUEST_METHOD"] === "POST" && !$is_found): ?>
            <div class="status error">
                <p>Uw gebruikersnaam is niet gevonden, probeer opnieuw</p>
            </div>
            <?php endif; ?>

            <form method="post">
                <div class="data-input">
                    <label for="username">Gebruikersnaam</label>
                    <input type="text" id="username" name="username" required>
                </div>

                <div class="data-input">
                    <label for="new-password">Nieuw Paswoord</label>
                    <input type="password" id="new-password" name="new-password" required>
                </div>

                <div class="button-container">
                    <button class="button" type="submit">Instellen</button>
                </div>
            </form>
        </div>
    </body>
</html>
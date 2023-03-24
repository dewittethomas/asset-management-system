<?php
    require "includes/login-process.php"
?>  
<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles/main.css">
        <title>Asset Management Systeem - Inloggen</title>
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
            <?php if ($_SERVER["REQUEST_METHOD"] === "POST" && $is_invalid): ?>
            <div class="status error">
                <p>Uw gegevens zijn onjuist, probeer opnieuw</p>
            </div>
            <?php endif; ?>

            <form method="post">
                <div class="data-input">
                    <label for="username">Gebruikersnaam</label>
                    <input type="text" id="username" name="username" value="<?php echo isset($_POST['username']) ? $_POST['username'] : ''?>" required>
                </div>

                <div class="data-input">
                    <label for="password">Paswoord</label>
                    <input type="password" id="password" name="password" required>
                </div>

                <div class="password-reset">
                    <a href="password-reset.php">Wachtwoord vergeten?</a>
                </div>

                <div class="button-container">
                    <button class="button" type="submit">Inloggen</button>
                </div>
            </form>
        </div>
    </body>
</html>
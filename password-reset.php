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
            <form method="post">
                <div class="data-input">
                    <label for="username">Gebruikersnaam</label>
                    <input type="text" id="username" name="username" required>
                </div>

                <div class="data-input">
                    <label for="password">Nieuw Paswoord</label>
                    <input type="password" id="new-password" name="new-password" required>
                </div>

                <div class="button-container">
                    <button class="button" type="submit">Instellen</button>
                </div>
            </form>
        </div>
    </body>
</html>
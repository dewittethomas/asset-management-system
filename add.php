<?php
    require "includes/session.php"
?>
<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles/main.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
        <title>Asset Management Systeem - Toevoegen</title>
    </head>

    <body>
        <nav>
            <div class="nav-container">
                <h1 class="logo">Asset Management Systeem</h1>
                <ul class="nav-links">
                    <li><a href="index.php">Assets</a></li>
                    <li><a href="Includes/logout.php">Afmelden</a></li>
                </ul>
            </div>
        </nav>

        <div class="main-container">
            <div class="button-container">
                <a href="index.php" class="button"><i class="fa fa-arrow-left"></i>Terug</a>
            </div>

            <form>
                <div class="data-input">
                    <label for="naam">Naam van het asset</label>
                    <input type="text" id="naam" name="naam" required>
                </div>

                <div class="data-input">
                    <label for="eigenaar">Eigenaar</label>
                    <input type="text" id="eigenaar" name="eigenaar" required>
                </div>  

                <div class="data-input">
                    <label for="datum">Datum van activatie</label>
                    <input class="date pointer" type="date" id="datum" name="datum" required>
                </div>  

                <div class="data-input">
                    <label for="serienummer">Serienummer</label>
                    <input type="text" id="serienummer" name="serienummer" required>
                </div>  

                <div class="button-container">
                    <button class="button" type="submit"><i class="fa fa-plus"></i>Toevoegen</button>
                </div>
            </form>
        </div>
    </body>
</html>
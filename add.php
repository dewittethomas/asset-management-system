<?php
    require "includes/session.php";
    require "includes/add-process.php";
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
                    <li><a href="includes/logout.php">Afmelden</a></li>
                </ul>
            </div>
        </nav>

        <div class="main-container">
            <div class="button-container">
                <a href="index.php" class="button"><i class="fa fa-arrow-left"></i>Terug</a>
            </div>

            <form method="post">
                <div class="data-input">
                    <label for="name">Naam van het asset</label>
                    <input type="text" id="name" name="name" required>
                </div> 

                <div class="button-container">
                    <button class="button" type="submit"><i class="fa fa-plus"></i>Toevoegen</button>
                </div>
            </form>
        </div>
    </body>
</html>
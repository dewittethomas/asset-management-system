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
        <title>Asset Management Systeem - Assets</title>
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
                
            <div class="status user">
                <p><i class="fa fa-user"></i>U bent ingelogd als: <b><?php echo $username ?></b></p>
            </div>

            <div class="assets-container">
                <table class="assets-table">
                    <thead>
                        <tr>
                            <th>Naam</th>
                            <th>Eigenaar</th>
                            <th>Datum van activatie</th>
                            <th>Serienummer</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Asset 1</td>
                            <td>Eigenaar 1</td>
                            <td>2022-01-01</td>
                            <td>123ABC</td>
                        </tr>
                        <tr>
                            <td>Asset 2</td>
                            <td>Eigenaar 2</td>
                            <td>2022-01-02</td>
                            <td>456DEF</td>
                        </tr>
                        <tr>
                            <td>Asset 3</td>
                            <td>Eigenaar 3</td>
                            <td>2022-01-03</td>
                            <td>789GHI</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="button-container">
                <a href="add.php" class="button"><i class="fa fa-plus"></i>Toevoegen</a>
            </div>
        </div>
    </body>
</html>
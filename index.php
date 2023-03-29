<?php
    require "includes/session.php";
    require "includes/assets-table.php";
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
                <p><i class="fa fa-user"></i>U bent ingelogd als: <b><?php echo htmlspecialchars($username) ?></b></p>
            </div>

            <div class="assets-container">
                <table class="assets-table">
                    <thead>
                        <tr>
                            <th>Naam</th>
                            <th>Eigenaar</th>
                            <th>Datum van activatie</th>
                            <th>Serienummer</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        if ($result -> num_rows > 0 ) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td>{$row["name"]}</td>";
                                echo "<td>{$row["owner_name"]}</td>";
                                echo "<td>{$row["activation_date"]}</td>";
                                echo "<td>{$row["serial_number"]}</td>";
                                echo "<td class='delete'><a class='delete-button' href='includes/delete-process.php?serial={$row['serial_number']}'><i class='fa fa-x'></i></a></td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr>";
                            echo "<td colspan='5' class='no-data'>Er zijn geen assets beschikbaar</td>";
                            echo "</tr>";
                        }

                        mysqli_close($conn);
                        ?>
                    </tbody>
                </table>
            </div>

            <div class="button-container">
                <a href="add.php" class="button"><i class="fa fa-plus"></i>Toevoegen</a>
            </div>
        </div>
    </body>
</html>
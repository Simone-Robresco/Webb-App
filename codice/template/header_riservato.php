<?php 
session_start();

if(!isset($_SESSION['login']))
    header("Location: ./index.php");

?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area Riservata - Dashboard</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <header>
        <h2>📊 Dashboard Personale</h2>
    </header>
    <cd>
        <?php
            if(isset($_SESSION['login']))
                echo "<a href=./index.php>🚪 Esci</a>";
        ?>
    </cd>
</body>
</html>
<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>script</title>
</head>
<body>
    <?php
        if (!isset($_SESSION['numRecensioni'])) {
            $_SESSION['numRecensioni'] = 1;
            $_SESSION['votes'] = [];
            $_SESSION['lastDate'] = '';
        } else if(empty($_SESSION)){
            $_SESSION['numRecensioni'] = 1;
            $_SESSION['votes'] = [];
            $_SESSION['lastDate'] = '';
        } else {
            $_SESSION['numRecensioni']++;
            $_SESSION['votes'][] = $_POST['recensione'];
            $_SESSION['lastDate'] = $_POST['data'];
        }
    ?>
    <br><a href="./presentazione.html">Torna Indietro</a>
</body>
</html>
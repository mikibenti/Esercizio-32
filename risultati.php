<?php
    session_start();

    $numRecensioni = $_SESSION['numRecensioni'];
    $lastDate = $_SESSION['lastDate'];
    $votes = $_SESSION['votes'];

    $media = 0;
    if ($numRecensioni > 0) {
        $media = array_sum($votes) / $numRecensioni;
    }
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>risultati</title>
</head>
<body>
    <h1 style="color:red;text-align:center;">Risultati</h1>
    <h2>Statistiche : </h2>
    <table>
        <tr>
            <th style="border= 1 px solid black">Numero di invii : </th>
            <th style="border= 1 px solid black">Ultima data inviata : </th>
        </tr>
        <tr>
            <td style="border= 1 px solid black"><?php echo $numRecensioni; ?></td>
            <td style="border= 1 px solid black"><?php echo $lastDate; ?></td>
        </tr>
    </table>
    <h2>Voti : </h2>
    <ul>
        <?php
            foreach($votes as $voto) {
                echo "<li>$voto</li>";
            }
        ?>
    </ul>
    <h3>Media : <?php echo number_format($media, 2); ?></h3>
    <p><a href="presentazione.html">Pagina Iniziale</a></p>
</body>
</html>

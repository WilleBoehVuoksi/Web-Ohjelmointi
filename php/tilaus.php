<?php

function laskeToimituskulut($toimitustapa) {
    switch ($toimitustapa) {
        case "Nouto":
            return 0.00;
        case "Postipaketti":
            return 6.90;
        case "Kotiinkuljetus":
            return 12.50;
        default:
            return -1;
    }
}


$yhteenveto = null;


if ($_SERVER["REQUEST_METHOD"] == "POST") {

 
    $maara = $_POST["maara"] ?? 1;
    $toimitustapa = $_POST["toimitustapa"] ?? "";


    $tuotteen_nimi = "Sähköpotkulauta";
    $hinta_kpl = 349.90;


    $valisumma = $maara * $hinta_kpl;
    $toimituskulut = laskeToimituskulut($toimitustapa);
    $kokonaishinta = $valisumma + $toimituskulut;

    if ($toimituskulut != -1) {
        $yhteenveto = "
        <h3>Tilauksen yhteenveto</h3>
        Tuote: $tuotteen_nimi<br>
        Määrä: $maara kpl<br>
        Välisumma: " . number_format($valisumma, 2, ",", " ") . " €<br>
        Toimitustapa: $toimitustapa<br>
        Toimituskulut: " . number_format($toimituskulut, 2, ",", " ") . " €<br>
        <strong>Yhteensä: " . number_format($kokonaishinta, 2, ",", " ") . " €</strong>
        ";
    } else {
        $yhteenveto = "Virheellinen toimitustapa.";
    }
}
?>
<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <title>Tilauslomake</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        .container {
            width: 400px;
            margin: 50px auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
        }
        label {
            display: block;
            margin-top: 10px;
        }
        input, select, button {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
        }
        button {
            margin-top: 15px;
            background-color: #007acc;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #005fa3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tilauslomake</h1>

        <h3>Tuote: Sähköpotkulauta (349,90 €/kpl)</h3>

        <form method="post" action="tilaus.php">
            <label for="maara">Määrä:</label>
            <input type="number" name="maara" id="maara" min="1" value="1">

            <label for="toimitustapa">Toimitustapa:</label>
            <select name="toimitustapa" id="toimitustapa">
                <option value="Nouto">Nouto</option>
                <option value="Postipaketti">Postipaketti</option>
                <option value="Kotiinkuljetus">Kotiinkuljetus</option>
            </select>

            <button type="submit">Laske hinta</button>
        </form>

        <?php
    
        if ($yhteenveto !== null) {
            echo "<hr>";
            echo $yhteenveto;
        }
        ?>
    </div>
</body>
</html>

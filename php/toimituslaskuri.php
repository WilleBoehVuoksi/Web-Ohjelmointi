<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <title>Toimituskululaskuri</title>
</head>
<body>

<h1>Toimituskululaskuri</h1>

<?php
// 1. Switch-lausekkeen sisältävän funktion määrittely
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

// 2. Funktion kutsuminen ja tulosten käsittely
$valittu_tapa = "Nouto";
$hinta = laskeToimituskulut($valittu_tapa);

// if-lauseke tuloksen tulostamiseksi
if ($hinta != -1) {
    echo "Valittu toimitustapa: " . $valittu_tapa . "<br>";
    echo "Toimituskulut: " . number_format($hinta, 2, ",", " ") . " €";
} else {
    echo "Virheellinen toimitustapa";
}
?>

</body>
</html>

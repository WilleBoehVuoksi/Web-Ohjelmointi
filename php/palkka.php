<?php
$tuntipalkka = $_POST["tuntipalkka"] ?? 0;
$tuntimaara = $_POST["tuntimaara"] ?? 0;
$viikonloppulisa = $_POST["viikonloppulisa"] ?? 0;
$viikonloppumaara = $_POST["viikonloppumaara"] ?? 0;

$peruspalkka = $tuntipalkka * $tuntimaara;
$viikonloppulisat = $viikonloppulisa * $viikonloppumaara;
$kokonaispalkka = $peruspalkka + $viikonloppulisat;

echo "Yhteispalkka ilman viikonloppulisiä: " . $peruspalkka . "<br>";
echo "Yhteispalkka viikonloppulisien kanssa: " . $kokonaispalkka;
?>

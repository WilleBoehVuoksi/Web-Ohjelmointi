<?php
function siisti($data) {
    return htmlspecialchars(trim($data));
}

$nimi = siisti($_POST["nimi"] ?? "");
$email = siisti($_POST["email"] ?? "");
$viesti = siisti($_POST["viesti"] ?? "");

if ($nimi && $email && $viesti) {
    $ok = mail(
        "OMA.SAHKOPOSTI@ESIMERKKI.FI",
        "Palaute sivustolta",
        "Nimi: $nimi\nEmail: $email\nViesti:\n$viesti"
    );

    header("Location: " . ($ok ? "kiitos.php" : "virhe.php"));
} else {
    header("Location: virhe.php");
}

<?php
// Tarkistetaan onko lomake lähetetty
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $kayttajatunnus = $_POST["kayttajatunnus"] ?? "";
    $salasana = $_POST["salasana"] ?? "";

    if ($kayttajatunnus === "admin" && $salasana === "kissa123") {
        // Kirjautuminen onnistui
        echo "<h1>Tervetuloa admin!</h1>";
        echo "<p>Sinut ohjataan palkkalaskuriin muutaman sekunnin kuluttua...</p>";

        echo '<meta http-equiv="refresh" content="2;url=palkkalaskuri.php">';
        exit();

    } else {
        // Kirjautuminen epäonnistui
        echo "Virheellinen käyttäjätunnus tai salasana.";
    }
}
?>

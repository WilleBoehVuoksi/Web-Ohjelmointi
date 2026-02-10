<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <title>Palvelut</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header>
    <h1>Palvelut</h1>
</header>

<?php include "includes/navigaatio.php"; ?>

<main>
    <h2>Tarjoamme</h2>
    <ul>
        <?php
        $palvelut = ["Web-kehitys", "Ylläpito", "Konsultointi"];
        foreach ($palvelut as $p) {
            echo "<li>$p</li>";
        }
        ?>
    </ul>
</main>

<?php include "includes/footer.php"; ?>

</body>
</html>

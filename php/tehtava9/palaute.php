<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <title>Palaute</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header>
    <h1>Palaute</h1>
</header>

<?php include "includes/navigaatio.php"; ?>

<main>
<form action="lahetys.php" method="post">
    <p>
        Nimi:<br>
        <input type="text" name="nimi" required>
    </p>

    <p>
        Sähköposti:<br>
        <input type="email" name="email" required>
    </p>

    <p>
        Palaute:<br>
        <textarea name="viesti" required></textarea>
    </p>

    <p>
        <input type="submit" value="Lähetä">
    </p>
</form>
</main>

<?php include "includes/footer.php"; ?>

</body>
</html>

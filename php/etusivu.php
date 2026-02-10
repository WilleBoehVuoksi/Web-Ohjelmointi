<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <title>Etusivu - Meidän Firma</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        nav ul {
            list-style: none;
            padding: 0;
            display: flex;
            gap: 10px;
            background: #eee;
        }

        nav ul li a {
            display: block;
            padding: 10px 15px;
            text-decoration: none;
            color: black;
        }

        nav ul li.active a {
            background-color: #007bff;
            color: white;
        }
    </style>
</head>
<body>

<?php include 'navigaatio.php'; ?>

<main>
    <h1>Tervetuloa etusivulle!</h1>
    <p>Tämä on sivustomme etusivu.</p>
</main>

</body>
</html>

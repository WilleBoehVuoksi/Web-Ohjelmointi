<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <title>Tuotteet - Meidän Firma</title>
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
    <h1>Tuotteemme</h1>
    <p>Tässä esitellään tuotteemme.</p>
</main>

</body>
</html>

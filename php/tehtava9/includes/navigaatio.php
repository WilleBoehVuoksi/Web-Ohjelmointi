<?php
$sivut = [
    "Etusivu" => "etusivu.php",
    "Palvelut" => "palvelut.php",
    "Palaute" => "palaute.php"
];

$nykyinen = basename($_SERVER["PHP_SELF"]);
?>

<nav>
    <ul>
        <?php foreach ($sivut as $nimi => $url): ?>
            <li class="<?= ($nykyinen === $url) ? 'active' : '' ?>">
                <a href="<?= $url ?>"><?= $nimi ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</nav>

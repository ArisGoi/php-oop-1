<?php
require __DIR__ . "./classes/movieClass.php";

// vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
$f_avatar = new Movie("Avatar", "James Cameron", 2009, 162, "inglese", 9.99);
$f_avengers_endgame = new Movie ("Avengers: Endgame", "Anthony e Joe Russo", 2019, 181, "inglese", 13.99);

$f_titanic = new Movie ("Titanic", "James Cameron", 1997, 195, "inglese", 8.25);

// var_dump($f_avatar->getInfo()); die;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        p{margin: 0;}
        h2{margin-bottom: 0;}
    </style>
</head>
<body>
    <ul>
        <li>
            <h2><?= $f_avatar->getInfo("titolo") ?></h2>
            <p><?= $f_avatar->getInfo("anno") ?></p>
            <p>durata: <?= $f_avatar->getInfo("durata") ?></p>
            <p>lingua: <?= $f_avatar->getInfo("lingua") ?></p>
            <p>prezzo: <?= $f_avatar->getPrezzo(18) ?></p>
        </li>
        <li>
            <h2><?= $f_avengers_endgame->getInfo("titolo") ?></h2>
            <p><?= $f_avengers_endgame->getInfo("anno") ?></p>
            <p>durata: <?= $f_avengers_endgame->getInfo("durata") ?></p>
            <p>lingua: <?= $f_avengers_endgame->getInfo("lingua") ?></p>
            <p>prezzo: <?= $f_avengers_endgame->getPrezzo(18) ?></p>
        </li>
        <li>
            <h2><?= $f_titanic->getInfo("titolo") ?></h2>
            <p><?= $f_titanic->getInfo("anno") ?></p>
            <p>durata: <?= $f_titanic->getInfo("durata") ?></p>
            <p>lingua: <?= $f_titanic->getInfo("lingua") ?></p>
            <p>prezzo: <?= $f_titanic->getPrezzo(18) ?></p>
        </li>
    </ul>
</body>
</html>
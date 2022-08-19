<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regex</title>
</head>
<body>
<h1>Je fais des Regex</h1>
<?php

$masque = '/mer/';
$chaine = 'la mere michel va à la mer';
$match = [];
$match_all = [];

preg_match($masque, $chaine, $match);
preg_match_all($masque, $chaine, $match_all);

var_dump($match);
echo "<br />";

var_dump($match_all);
echo "<br />";

$match_all_2 = [];
$valeur = preg_match_all($masque, $chaine, $match_all_2, PREG_PATTERN_ORDER, 3);
echo "<p>Il y a $valeur fois la lettre recherchée</p>";


if (preg_match($masque, $chaine)) {
    echo "<p>J'ai trouvé l'occurence</p>";
    echo "<p>Le caractère recherché est présente : " . preg_match_all($masque, $chaine) . " fois</p>";
}

else {
    echo "<p>Je n'ai rien trouvé</p>";
}

?>
</body>
</html>
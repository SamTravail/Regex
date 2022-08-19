<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Je fais du Regex !</h1>
<?php
$masque = '/m/';
$chaine = 'mere michel';
$match = [];
$match_all = [];

preg_match($masque,$chaine,$match);
preg_match_all($masque,$chaine,$match_all);

var_dump($match);
echo "<br />";

var_dump($match_all);
echo "<br />";

if (preg_match($masque, $chaine)) {
    echo "<p>j'ai trouvé l'occurence</p>";
    echo "<p>Le caractère recherché est présent : " . preg_match_all($masque, $chaine) . " fois.</p>";
} else {
    echo "<p>je n'ai rien trouvé</p>";
}

?>
</body>
</html>
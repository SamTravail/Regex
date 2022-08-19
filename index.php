<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>body {background-color: lightslategrey}</style>
</head>
<body>
<h1>Je fais du Regex !</h1>
<?php
$masque = '/Michel/';
$tableau = ['Michel','Robert', 'Arthur', 'Jean-Michel'];
$chaine = 'Bonjour, je m\'appelle Michel';

// preg_replace() renvoie la chaîne de départ s'il n'y de correspondance, alors preg_filter() renvoie la valeur null
$valeur = preg_filter($masque, 'Robert', $chaine);
echo "<p>$valeur</p>";

// Exemple avec la fonction preg_grep() qui permet une recherche sur un tableau
$resultat = preg_grep($masque,$tableau);

var_dump($resultat);

$masque1 = "/[aeiouy]/";
$masque2 = "/j[aeiouy]/";
$masque3 = "/[aeiouy][aeiouy]/";
$masque4 = "/[aeiouy][aeiouy][aeiouy]/";
$chaine = "je m'appelle Michel et je fais des tableaux en PHP au bord de l'eau, biiiiiiitch";

preg_match_all($masque1, $chaine, $tableau1);
preg_match_all($masque2, $chaine, $tableau2);
preg_match_all($masque3, $chaine, $tableau3);
preg_match_all($masque4, $chaine, $tableau4);

var_dump($tableau1);
echo "<br />";
var_dump($tableau2);
echo "<br />";
var_dump($tableau3);
echo "<br />";
var_dump($tableau4);

// Métacaractères :
// - \, caractère d'échappement
// - ^, exclure la classe de caractères recherchés
// - -, intervalle de caractères

$masque1 = "/[^c]/i";
$chaine = "C'est combien une place de cinema sans les c";

preg_match_all($masque1, $chaine, $tableau1);

var_dump($tableau1);


?>
</body>
</html>
<?php

echo "<h1>Exercice n°5</h1>";

$nbFrancs = 59000009;
$valeurFrancs = 1;
$totalFrancs = $nbFrancs * $valeurFrancs;

$conversionFrancToEuros = 0.152449;

$totalFrancsToEuros = round($totalFrancs * $conversionFrancToEuros, 2);

echo "Nous avons 100 francs et nous souhaitons connaître sa valeur en euros, soit 100 francs multiplié par la valeur de l'équivalent en euros (soit 0,152449€).<br>";
echo "Le résultat est de $totalFrancsToEuros euros.<br>";

$round2 = number_format($totalFrancs * $conversionFrancToEuros, 2, '.', ' ');
echo $round2;
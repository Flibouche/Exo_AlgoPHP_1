<?php

echo "<h1>Exercice n°13</h1>";

$notes = [10, 12, 8, 19, 3, 16, 11, 13, 9];
$nbNotes = count($notes);
$sommeNotes = array_sum($notes);
$moyenne = round($sommeNotes / $nbNotes , 2);

echo "Les notes obtenues par l'élève sont : ";
for ($i = 0; $i < $nbNotes; $i ++) {
   echo $notes[$i]." ";
}

echo "<br>";

echo "Sa moyenne générale est donc de : $moyenne";
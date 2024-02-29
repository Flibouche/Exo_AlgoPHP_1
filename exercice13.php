<?php

echo "<h1>Exercice n°13</h1>";

$notes = [10, 12, 8, 19, 3, 16, 11, 13, 9];
$nbNotes = count($notes);
$sommeNotes = array_sum($notes);
$moyenne = round($sommeNotes / $nbNotes , 2);

foreach($notes as $listenote) {
}

echo "Les notes obtenues par l'élève sont : $listenote <br>";
echo "Sa moyenne générale est donc de : $moyenne";
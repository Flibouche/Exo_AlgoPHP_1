<?php

echo "<h2>Exercice n°3</h2>";

$oldPhrase = "Notre formation DL commence aujourd'hui";
echo $oldPhrase."<br>";
$aujourdhui = "aujourd'hui";
$demain = "demain";
$newPhrase = str_replace($aujourdhui, $demain, $oldPhrase);
echo $newPhrase;
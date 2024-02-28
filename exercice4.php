<?php

echo "<h2>Exercice n°4</h2>";

$a = "Engage le jeu que je le gagne";
$b = strrev($a);
echo $b;
if($a == $b) {
    echo "<br>Ceci est un palindrome !";
} else {
    echo "<br>Ceci n'est pas un palindrome !";
}
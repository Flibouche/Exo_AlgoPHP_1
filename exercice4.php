<?php

echo "<h1>Exercice n°4</h1>";

$phraseA = "Engage le jeu que je le gagne";
echo "La première phrase est la suivante : $phraseA. Nous allons faire en sorte de savoir si c'est un palindrome.<br>";

function check_palindrome($phraseA) {
    // supprimer tous les espaces
    $phraseA = str_replace(' ', '', $phraseA);
    // supprimer les minuscules
    $phraseA = strtolower($phraseA);
    // reverse the string
    $reverse = strrev($phraseA);

    if ($phraseA == $reverse) {
        echo "C'est un palindrome !<br>";
    } 
    else {
        echo "Ce n'est pas un palindrome !<br>";
    }
}

check_palindrome($phraseA);
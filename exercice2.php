<?php

echo "<h1>Exercice n°2</h1>";

$chaineDeCaracteres = "Notre formation DL commence aujourd'hui";

$nbMots = str_word_count($chaineDeCaracteres);
echo "La phrase « $chaineDeCaracteres » contient $nbMots mots.<br>";
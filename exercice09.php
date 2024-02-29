<?php

echo "<h1>Exercice n°9</h1>";

$age = 17;
$sexe = "F";

echo "Age : $age<br>";
echo "Sexe : $sexe<br>";

$cond1 = $sexe == "F" && $age >= 18 && $age <= 35;
$cond2 = $sexe == "H" && $age >= 20;

if($cond1 || $cond2) {
    $result = "imposable";
    echo "La personne est $result.<br>";
}
else {
    echo "La personne n'est pas imposable.<br>";
}
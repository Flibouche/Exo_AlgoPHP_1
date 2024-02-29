<?php

echo "<h1>Exercice n°11</h1>";

$marques = ["Peugeot", "Renault", "BMW", "Mercedes"];
$nbMarques = count($marques);

echo "Il y a $nbMarques marques de voitures dans le tableau :<ul>";
for ($i = 0; $i < $nbMarques; $i ++) {
    echo "<li>$marques[$i]</li>";
}
echo "</ul>";
<?php

echo "<h1>Exercice n°8</h1>";

echo "<h2>Méthode for</h2>";

$table = 8;

echo "Table de 8 :<br>";
for ($i = 1; $i <= 10; $i++) {
    $result = $i * $table;
    echo "$i x $table = $result<br>";
}

echo "<h2>Méthode while</h2>";

echo "Table de 8 :<br>";
$table = 8;
$i = 1;
while($i <= 10) {
    $result = $i * $table;
    echo "$i x $table = $result<br>";
    $i++;
}

echo "<h2>Méthode foreach</h2>";

echo "Table de 8 :<br>";
$table = 8;
foreach(range(1, 10) as $element) {
    $result = $table * $element;
    echo "$element x $table = $result<br>";
} 

// $tableau = ["element 1", "element 2", "element 3"];
// $tailleTableau = count($tableau);

// for ($i=0; $i < $tailleTableau ; $i++) { 
//     echo "index $i = ".$tableau[$i]."<br>";
// }

// $i = 0;
// while($i < count($tableau)) {
//     echo $tableau[$i]."<br>";
//     $i++;
// }

// foreach($tableau as $element) {
//     echo $element."<br>";
// }

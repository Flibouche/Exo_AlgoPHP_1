<?php

echo "<h1>Exercice n°7</h1>";

$age = 7;

if($age == 6 or $age == 7) {
    $result = "Poussin";
    echo "L'enfant qui a $age ans appartient à la catégorie $result.<br>";
}
elseif($age == 8 or $age == 9) {
    $result = "Pupille";
    echo "L'enfant qui a $age ans appartient à la catégorie $result.<br>";
}
elseif($age == 10 || $age == 11) {
    $result = "Minime";
    echo "L'enfant qui a $age ans appartient à la catégorie $result.<br>";
}
elseif($age == 12) {
    $result = "Cadet";
    echo "L'enfant qui a $age ans appartient à la catégorie $result.<br>";
}
else {
    echo "La catégorie n'est pas gérée.<br>";
}
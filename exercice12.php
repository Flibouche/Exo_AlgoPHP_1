<?php

echo "<h1>Exercice n°12</h1>";

$tableauPrenom = [
    "Mickaël" => "FRA",
    "Virgile" => "ESP",
    "Marie-Claire" => "ENG"
];

foreach($tableauPrenom as $prenom => $langue) {
    if($langue == "FRA") {
        echo "Salut $prenom<br>";
    } elseif($langue == "ESP") {
        echo "Hola $prenom<br>";
    } elseif($langue == "ENG") {
        echo "Hello $prenom<br>";
    } else {
        echo "Cette langue n'est pas gérée !<br>";
    }
}

// foreach($tableauPrenom as $prenom => $langue) {
//     if($langue == "FRA") {
//         $salutations = "Salut";
//     } elseif($langue == "ESP") {
//         $salutations = "Hola";
//     } elseif($langue == "ENG") {
//         $salutations = "Hello";
//     }
// }

// echo "$salutations $prenom";
<?php

echo "<h1>Exercice n°15</h1>";

function age() {
    $birthdate = new DateTime("");
    $today = new DateTime();
    $interval = $today->diff($personne[i]);
    echo $interval->format('%y ans');
}

$personne = [
    [
        'nom' => 'DUPONT',
        'prenom' => 'Michel',
        $birthdate => '1980-02-19',
    ],
    [
        'nom' => 'DUCHEMIN',
        'prenom' => 'Alice',
        $birthdate => '1985-01-17',
    ]
];



echo $personne[0]['prenom'].' '.['nom']." a ".check_age();

<?php

echo "<h1>Exercice n°15</h1>";

spl_autoload_register(function ($class_name) {
    require 'classes/'. $class_name . '.php';
});

// Personnes
$Michel = new Personne("DUPONT", "Michel", "1980-02-19");  
$Alice = new Personne("DUCHEMIN", "Alice", "1985-01-17");

echo $Michel->afficherPersonne();
echo $Alice->afficherPersonne();

<?php

echo "<h1>Exercice n°14</h1>";

$birthdate = new DateTime("1985-01-17");
$today = new DateTime();
$interval = $today->diff($birthdate);
echo "Âge de la personne : ".$interval->format('%y ans'.' '.'%m mois'.' '.'%d jours');
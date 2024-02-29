<?php

echo "<h1>Exercice n°10</h1>";

$amountToPaid = 152;
$amountPaid = 200;
$remains = $amountPaid - $amountToPaid;

echo "Montant à payer : $amountToPaid €<br>";
echo "Montant à verser : $amountPaid €<br>";
echo "Reste à payer : $remains €<br>";
echo "************************************<br>";
echo "Rendue de monnaie :<br>";
echo $money10 = intdiv($remains, 10); // 4
$term = ($money10 > 1) ? "s" : "";
echo " billet$term de 10 €<br>";

$remains = $remains - $money10 * 10;
echo $money5 = intdiv($remains, 5); // 1
$term = ($money5 > 1) ? "s" : "";
echo " billet$term de 5 €<br>";

$remains = $remains - $money5 * 5;
echo $money2 = intdiv($remains, 2); // 1
$term = ($money2 > 1) ? "s" : "";
echo " pièce$term de 2 €<br>";

$remains = $remains - $money2 * 2;
echo $money1 = $remains; // 1
$term = ($money1 > 1) ? "s" : "";
echo " pièce$term de 1 €<br>";

// $remains = $remains MOINS le nombre de billets de dix (soit $money10 = intdiv($remains, 10)) multiplié par son prix (10) et ainsi de suite pour tout le reste.
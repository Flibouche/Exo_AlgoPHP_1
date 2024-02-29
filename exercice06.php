<?php

echo "<h1>Exercice n°6</h1>";

$prixHT = 9.99;
$quantite = 5;
$totalHT = $prixHT * $quantite;
$tauxTVA = 0.2;

$totalTTC = $totalHT * (1 + $tauxTVA);
echo "Prix unitaire de l'article : $prixHT €<br>";
echo "Quantité : $quantite<br>";
echo "Taux de TVA : $tauxTVA %<br>";
echo "Le montant de la facture à régler est de : $totalTTC €.<br>";
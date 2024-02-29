<?php

echo "<h1>Exercice n°10</h1>";

$amountToPaid = 152;
$amountPaid = 200;
$remains = $amountPaid - $amountToPaid;
$money10 = 10;
$money5 = 5;
$money2 = 2;
$money1 = 1;
$much10 = $remains / $money10;
$much5 = $remains / $money5;
$much2 = $remains / $money2;
$much1 = $remains / $money1;



echo $much10."<br>";
echo $much5."<br>";
echo $much2."<br>";
echo $much1."<br>";


echo "Montant à payer : $amountToPaid €<br>";
echo "Montant à verser : $amountPaid €<br>";
echo "Reste à payer : $remains €<br>";
echo "************************************<br>";

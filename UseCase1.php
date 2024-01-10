<?php

$bananaQuantity = 6;
$bananaCost = 1;

$appleQuantity = 3;
$appleCost = 1.5;

$wineQuantity = 2;
$wineCost = 10;

$totalCost = ($bananaQuantity * $bananaCost) + ($appleQuantity * $appleCost) + ($wineQuantity * $wineCost);
echo "Total cost: €" . $totalCost . PHP_EOL;

$wineTaxRate = 0.21;
$wineTax = $wineQuantity * $wineCost * $wineTaxRate;
echo "Wine tax: €" . $wineTax . PHP_EOL;

$fruitTaxRate = 0.06;
$fruitTax = (($bananaQuantity * $bananaCost) + ($appleQuantity * $appleCost)) * $fruitTaxRate;
echo "Fruit tax: €" . $fruitTax . PHP_EOL;

?>

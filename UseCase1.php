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


class Banana
{
    private $quantity;
    private $cost;

    public function __construct($quantity, $cost) {
        $this->quantity = $quantity;
        $this->cost = $cost;
    }
}

class Apple
{
    private $quantity;
    private $cost;

    public function __construct($quantity, $cost) {
        $this->quantity = $quantity;
        $this->cost = $cost;
    }
}

class Wine
{
    private $quantity;
    private $cost;

    public function __construct($quantity, $cost) {
        $this->quantity = $quantity;
        $this->cost = $cost;
    }
}

class TotalPrice
{
    private $banana;
    private $apple;
    private $wine;

    public function __construct($banana, $apple, $wine) {
        $this->banana = $banana;
        $this->apple = $apple;
        $this->wine = $wine;
    }
}

$banana = new Banana(6, 1);
$apple = new Apple(3, 1.5);
$wine = new Wine(2, 10);

$totalprice = new TotalPrice($banana, $apple, $wine);
?>

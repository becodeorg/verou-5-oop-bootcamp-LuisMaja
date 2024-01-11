<?php

// $bananaQuantity = 6;
// $bananaCost = 1;

// $appleQuantity = 3;
// $appleCost = 1.5;

// $wineQuantity = 2;
// $wineCost = 10;

// $totalCost = ($bananaQuantity * $bananaCost) + ($appleQuantity * $appleCost) + ($wineQuantity * $wineCost);
// echo "Total cost: €" . $totalCost . PHP_EOL;

// $wineTaxRate = 0.21;
// $wineTax = $wineQuantity * $wineCost * $wineTaxRate;
// echo "Wine tax: €" . $wineTax . PHP_EOL;

// $fruitTaxRate = 0.06;
// $fruitTax = (($bananaQuantity * $bananaCost) + ($appleQuantity * $appleCost)) * $fruitTaxRate;
// echo "Fruit tax: €" . $fruitTax . PHP_EOL;


class Banana
{
    private $quantity;
    private $cost;
    private $tax;

    public function __construct($quantity, $cost, $tax) {
        $this->quantity = $quantity;
        $this->cost = $cost;
        $this->tax = $tax;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function getCost() {
        return $this->cost;
    }

    public function getTax() {
        return $this->tax;
    }
}

class Apple
{
    private $quantity;
    private $cost;
    private $tax;

    public function __construct($quantity, $cost, $tax) {
        $this->quantity = $quantity;
        $this->cost = $cost;
        $this->tax = $tax;
    }

    public function getQuantity(){
        return $this->quantity;
    }

    public function getCost(){
        return $this->cost;
    }

    public function getTax() {
        return $this->tax;
    }
}

class Wine
{
    private $quantity;
    private $cost;
    private $tax;

    public function __construct($quantity, $cost, $tax) {
        $this->quantity = $quantity;
        $this->cost = $cost;
        $this->tax = $tax;
    }

    public function getQuantity(){
        return $this->quantity;
    }

    public function getCost(){
        return $this->cost;
    }

    public function getTax() {
        return $this->tax;
    }
}

class ShoppingCart
{
    private $banana;
    private $apple;
    private $wine;
    private $totalCost;

    public function __construct($banana, $apple, $wine) {
        $this->banana = $banana;
        $this->apple = $apple;
        $this->wine = $wine;
        $this->calculateTotalCost();
    }

    public function calculateTotalCost() {
        $bananaCost = $this->banana->getQuantity() * $this->banana->getCost();
        $appleCost = $this->apple->getQuantity() * $this->apple->getCost();
        $wineCost = $this->wine->getQuantity() * $this->wine->getCost();

        $this->totalCost = $bananaCost + $appleCost + $wineCost;

        return $this->totalCost;
    }

    public function calculateTaxes() {
        $bananaTax = $this->banana->getTax() * $this->banana->getCost();
        $appleTax = $this->apple->getTax() * $this->apple->getCost();
        $wineTax = $this->wine->getTax() * $this->wine->getCost();

        $totalTax = $bananaTax + $appleTax + $wineTax;

        return $totalTax;
    }
}

$banana = new Banana(6, 1, 0.06);
$apple = new Apple(3, 1.5, 0.06);
$wine = new Wine(2, 10, 0.21);

$shoppingCart = new ShoppingCart($banana, $apple, $wine);
$totalPrice = $shoppingCart->calculateTotalCost();
echo "Total cost: €" . $totalPrice . PHP_EOL;

$totalTax = $shoppingCart->calculateTaxes();
echo "Tax is: €" . $totalTax . PHP_EOL;

?>

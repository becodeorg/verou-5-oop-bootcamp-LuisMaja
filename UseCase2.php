<?php
class Banana
{
    private $quantity;
    private $cost;
    private $tax;
    private $discount;

    public function __construct($quantity, $cost, $tax, $discount = 0) {
        $this->quantity = $quantity;
        $this->cost = $cost;
        $this->tax = $tax;
        $this->discount = $discount;
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

    public function getDiscount() {
        return $this->$discount;
    }
}

class Apple
{
    private $quantity;
    private $cost;
    private $tax;
    private $discount;

    public function __construct($quantity, $cost, $tax, $discount = 0) {
        $this->quantity = $quantity;
        $this->cost = $cost;
        $this->tax = $tax;
        $this->discount = $discount;
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

    public function getDiscount() {
        return $this->$discount;
    }
}

class Wine
{
    private $quantity;
    private $cost;
    private $tax;
    private $discount;

    public function __construct($quantity, $cost, $tax, $discount = 0) {
        $this->quantity = $quantity;
        $this->cost = $cost;
        $this->tax = $tax;
        $this->discount = $discount;
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

    public function getDiscount() {
        return $this->$discount;
    }
}

class ShoppingCart
{
    private $banana;
    private $apple;
    private $wine;
    private $totalCost;
    private $discount;

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

$banana = new Banana(6, 1, 0.06, 0.5);
$apple = new Apple(3, 1.5, 0.06, 0.5);
$wine = new Wine(2, 10, 0.21);

$shoppingCart = new ShoppingCart($banana, $apple, $wine);
$totalPrice = $shoppingCart->calculateTotalCost();
echo "Total cost (with 50%discount): €" . $totalPrice . PHP_EOL;

$totalTax = $shoppingCart->calculateTaxes();
echo "Tax is: €" . $totalTax . PHP_EOL;
?>
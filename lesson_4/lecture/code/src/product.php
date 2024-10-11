<?php

namespace src;

abstract class Product 
{
    protected string $name;
    protected float $price;

    public function __construct(string $name, int $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    abstract function getFinalPrice(): float;
}

class RealProduct extends Product
{
    protected int $count;

    public function __construct(string $name, int $price, int $count)
    {
        parent::__construct($name, $price);
        $this->count = $count;
    }

    function getFinalPrice(): float 
    {
        return $this->count * $this->price;
    }
}

class DigitalProduct extends RealProduct
{
    function getFinalPrice(): float 
    {
        return $this->count * $this->price * 0.5;

    }
}

class WeightProduct extends Product 
{
    protected int $weight;

    public function __construct(string $name, int $price, int $weight)
    {
        parent::__construct($name, $price);
        $this->weight = $weight;
    }

    function getFinalPrice(): float
    {
        return $this->price * $this->weight;
    }
}

$product = new WeightProduct("apple", 2, 6);

echo $product->getFinalPrice() . "\n"; // Output: 12

$digitalProducnt = new DigitalProduct("smart", 32543, 4);

echo $digitalProducnt->getFinalPrice();
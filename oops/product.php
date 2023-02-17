<?php

class product
{
    private $name;
    private $description;
    private $price;
    // private $name;

    public function __construct($n, $d, $p)
    {
        $this->name = $n;
        $this->description = $d;
        $this->price = $p;
    }
    public function getname()
    {
        return $this->name;
    }
    public function getdescription()
    {
        return $this->description;
    }
    public function getprice()
    {
        return $this->price;
    }
    public function setName()
    {
        return $this->name;
    }
    public function setDescription()
    {
        return $this->description;
    }
    public function setPrice()
    {
        return $this->price;
    }
}


$product = new product("Apple", "Apple Brand New Mobile", 56000);

echo $product->getName() . "<br>"; // Output: Product Name
echo $product->getDescription(). "<br>";  // Output: Product Description
echo $product->getPrice(). "<br>"; // Output: 9.99

$product->setName("New Product Name"). "<br>"; 
$product->setDescription("New Product Description"). "<br>"; 
$product->setPrice(19.99). "<br>"; 

echo $product->getName(). "<br>";  // Output: New Product Name
echo $product->getDescription(). "<br>";  // Output: New Product Description
echo $product->getPrice(). "<br>";  // Output: 19.99

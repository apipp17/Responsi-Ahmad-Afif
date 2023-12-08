<?php

require_once "data/Product.php";

$product = new Product("samsong", 175000);

// tampilkan product get name
echo $product->getName(). PHP_EOL;
// tampilkan product get price
echo $product->getPrice(). PHP_EOL;

$dummy = new ProductDummy("Dumb", 1000);
$dummy->info();
<?php
class Product
{
    public $name = 'soap';
    public $price = 100; #cents

    public function priceAsCurrency($currencySymbol)
    {
        $priceAsCurrency = $this->price / 100;

        return $currencySymbol .$priceAsCurrency;
    }
}

$product = new Product();
print $product->priceAsCurrency('$') . PHP_EOL;
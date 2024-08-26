<?php
class Product
{
    public $name = 'soap';
    public $price = 452; #cents

    public function priceAsCurrency($divisor = 10, $currencySymbol = '$')
    {
        $priceAsCurrency = $this->price / $divisor;

        return $currencySymbol . $priceAsCurrency;
    }
}

$product = new Product();
print $product->priceAsCurrency(20).PHP_EOL;
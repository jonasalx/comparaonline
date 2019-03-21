<?php

include 'TypeProduct.php';
include 'MediumCoverage.php';
include 'FullCoverage.php';
include 'LowCoverage.php';
include 'MegaCoverage.php';
include 'SpecialFullCoverage.php';
include 'SuperSale.php';

class CarInsurance {

    protected $products = [];

    function CarInsurance($products) {
        $this->products = $products;
    }

    public function updatePrice() {
        for ($i = 0; $i < count($this->products); $i++) {
            $class = TypeProduct::getName($this->products[$i]->name);

            $son = new $class($this->products[$i]->name, $this->products[$i]->sellIn, $this->products[$i]->price);
            $son->calculatePrice();

            $this->products[$i]->sellIn = $son->sellIn;
            $this->products[$i]->price = $son->price;

            echo $this->products[$i]->name . ' ' . $this->products[$i]->sellIn . ' ' . $this->products[$i]->price;
            echo "<br>";
        }
    }

}

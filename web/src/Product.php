<?php

class Product {

    public $name;
    public $sellIn;
    public $price;

    function Product( $name, $sellIn, $price){
        $this->name = $name;
        $this->sellIn = $sellIn;
        $this->price = $price;
    }

}
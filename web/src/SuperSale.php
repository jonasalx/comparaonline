<?php

class SuperSale extends Product implements CalculatePrice{

    public function MediumCoverage($name, $sellIn, $price ) {
        parent::__construct( $name, $sellIn, $price );
    }
    
    public function calculatePrice(){
    	$this->sellIn --;
    	if( $this->sellIn >= 0) $this->price -= 1;
    	else $this->price -= 2;
    	if( $this->price < 0 ) $this->price = 0;
    }

}
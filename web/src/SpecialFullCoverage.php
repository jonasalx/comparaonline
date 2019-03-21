<?php

class SpecialFullCoverage extends Product implements CalculatePrice{

    public function MediumCoverage($name, $sellIn, $price ) {
        parent::__construct( $name, $sellIn, $price );
    }
    
    public function calculatePrice(){
    	if( $this->sellIn > 10 ) $this->price += 1;
    	if( $this->sellIn > 5 && $this->sellIn <=10 ) $this->price += 2;
    	if( $this->sellIn > 0 && $this->sellIn <=5 ) $this->price += 3;
    	if( $this->sellIn <= 0 ) $this->price = 0;
    	if( $this->price >50 ) $this->price = 50;
    	$this->sellIn --;
    }

}
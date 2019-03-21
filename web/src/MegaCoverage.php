<?php

class MegaCoverage extends Product implements CalculatePrice{

    public function MediumCoverage($name, $sellIn, $price ) {
        parent::__construct( $name, $sellIn, $price );
    }
    
    public function calculatePrice(){
    	//if( $this->sellIn >= 0) $this->price += 1;
    	//else $this->price += 2;
    	$this->sellIn --;
    }

}
<?php

	include 'src/Product.php';
    include 'src/CarInsurance.php';

	$productsAtDayZero = [
	  new Product('Medium Coverage', 10, 20),
	  new Product('Full Coverage', 2, 0),
	  new Product('Low Coverage', 5, 7),
	  new Product('Mega Coverage', 0, 80),
	  new Product('Mega Coverage', -1, 80),
	  new Product('Special Full Coverage', 15, 20),
	  new Product('Special Full Coverage', 10, 49),
	  new Product('Special Full Coverage', 5, 49),
	  new Product('Super Sale', 3, 6),
	];

	$carInsurance = new CarInsurance($productsAtDayZero);

	for ( $i = 1; $i <= 30; $i += 1) {
	  echo 'Day '.$i;
          echo '<br>';
	  echo 'name, sellIn, price';
          echo '<br>';
	  $carInsurance->updatePrice();
          echo '<br>';echo '<br>';
	}
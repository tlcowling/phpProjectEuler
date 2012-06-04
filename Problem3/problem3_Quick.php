<?php
//$number = 600851475143;

function prime_range($up_to){
	$primes = array(2,3,5,7,11);
	
	$number_to_start_from = max($primes);
	echo "highest prime $number_to_start_from";
}


function findHighestPrimeFactor($number){
	// $root = (int)sqrt($number);
	// 	echo "======\n";
	// 	echo "$root\n";
	// 	echo "======\n";
	
	for($i=0; $i<$number; $i++){
		if($number % $i == 0){
			echo "$i\n";
		}
	}
}

function isPrime($test_prime){
	if(basicIsNotPrime($test_prime)){
		return false; 
	}
	
	$primes = array(2);
	
	foreach($primes as $test_factor){
		if($test_prime % $test_factor == 0){return false;}
		array_push($primes, $test_prime);	
	}	
	
	print_r($primes);
	
	return true;
}

function basicIsNotPrime($test_prime){
	$last_digit = $test_prime % 10;
	return  ($last_digit == 2 ||
			 $last_digit == 4 ||
			 $last_digit == 5 ||
			 $last_digit == 6 ||
			 $last_digit == 8 ||
			 $last_digit == 0);
}

// findHighestPrimeFactor(600851475143);

$prime = 103;

if(isPrime($prime)){
	echo "$prime is a prime number";
}else{
	echo "$prime is not a prime";
}

?>
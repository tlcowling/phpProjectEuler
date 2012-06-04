<?php
function basicIsNotPrime($test_factor){
	$last_digit = $test_factor % 10;
	return !($last_digit == 0 ||
		 	 $last_digit == 2 || 
		 	 $last_digit == 4 || 
		 	 $last_digit == 5 || 
		 	 $last_digit == 6 || 
		 	 $last_digit == 8);
}

function prime_range($up_to){
	$primes = array(2,3,5);
	
	for($test_factor = max($primes)+1; $test_factor <= $up_to; $test_factor++){		
		foreach($primes as $prime){
			if($test_factor % $prime == 0){break;}
		}
		
		if($test_factor % $prime != 0){array_push($primes, $test_factor);}
	} 
	
	return $primes;
}

function get_factors($number){
	$factors = array();
	
	for($i=1; $i<=$number; $i++){
		if($number % $i == 0){
			array_push($factors, $i);
		}
	}
	
	return $factors;
}

function get_highest_prime_factor($number){
	$test_up_to = ceil(sqrt($number));
	
	return prime_range($test_up_to);
}

// print_r(prime_range(600851475143));
$result=prime_range(2000000);
print_r("The sum of these is " . array_sum($result));


?>
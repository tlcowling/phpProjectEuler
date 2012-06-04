<?php
class TriangleGenerator{
	public function __CONSTRUCT__(){
	}
	
	public function generate_triangle_number($number){
		$sum=0;
		for($i=1; $i<=$number; $i++){
			$sum = $sum + $i;
		}
		return $sum;
	}
	
	public function get_factors($number){
		$factors=array();
		
		for($i=1; $i<=$number; $i++){
			if($number % $i == 0){array_push($factors,$i);}
		}
		return $factors;
	}
	
	public function number_of_factors($number){
		$sqrt = sqrt($number);
		$count = 0;
		
		for($i=1; $i<=(int)$sqrt; $i++){
			if($number % $i == 0){$count++;}
		}
		
		return $count*2;
	}
}

$tg = new TriangleGenerator();
$tri= $tg->generate_triangle_number(7);
print_r($tg->get_factors($tri));
echo("Divisors: " . $tg->number_of_factors($tri));


$test_triangle=1;

while(true){
	$triangle = $tg->generate_triangle_number($test_triangle);
	$number_factors = $tg->number_of_factors($triangle);
	echo "TestTriangle: $test_triangle:  $triangle factors:$number_factors\n";
	if($tg->number_of_factors($triangle)>500){break;}
	$test_triangle++;
}

?>
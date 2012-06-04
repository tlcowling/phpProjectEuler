<?php
function get_factor_sum($number){
	$sum=0;
	for($i=1; $i<$number; $i++){
		if($number % $i == 0){$sum = $sum+ $i;}
	}
	return $sum;
}

$factor_sum = array();

for($j=0; $j<=10000; $j++){
	if($j%1000==0){echo ".";}
	
	$sum = get_factor_sum($j);					//b = d(a)
	$amicable_sum = get_factor_sum($sum);		//a = d(b)

		
	if(($j==$amicable_sum) && ($sum != $amicable_sum)){
		array_push($factor_sum,$j);
	}

}

print_r($factor_sum);
echo "The sum is: ". array_sum($factor_sum);

?>

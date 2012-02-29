<?php
	$product = 0;
	
	for($a=1; $a<=1000; $a++){
		for($b=1; $b<=$a; $b++){
			$a_squared = pow($a, 2);
			$b_squared = pow($b, 2);
			$c = pow(($a_squared + $b_squared),0.5);
			
			$total = $a+$b+$c;
			if($total==1000)echo $a*$b*$c;
		}
	}
?>

<?php

class Problem1
{
    public function go(){
        $sum = 0;

        for($i=1; $i<1000; $i++){
            if($this->isMultipleOf3Or5($i)){
                $sum = $sum + $i;
            }
        }

        return $sum;
    }

    public function isMultipleOf3Or5($number){
        return ($number % 3 == 0) || ($number % 5 == 0);
    }
}

$problem1 = new Problem1();
echo $problem1->go();
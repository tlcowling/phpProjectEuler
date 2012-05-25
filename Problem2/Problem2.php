<?php

include dirname(__FILE__)."/../Generators/FibonacciGenerator.php";

class Problem2
{
    public function isLessThan4Million($number){
        return $number < 4000000;
    }

    public function fibonacciNumbersLessThan4000000(){
        $fibonacci_generator = new FibonacciGenerator();
        $fibonacci_numbers = $fibonacci_generator->getFibonacciNumbersUpToIndex(4000000);

        return $fibonacci_numbers;
    }

    public function calculateSumOfFibonacciArray($array){
        return array_sum($array);
    }
}

$fib = new FibonacciGenerator();
$array = $fib->getFibonacciNumbersUpToIndex(32);
$even_numbers = array();

foreach($array as $number){
   if($number%2==0)
       array_push($even_numbers,$number);
}

echo array_sum($even_numbers);
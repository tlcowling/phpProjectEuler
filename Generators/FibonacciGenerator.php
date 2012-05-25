<?php

class FibonacciGenerator
{
    private $first = 1;
    private $second = 2;

    public function getNthFibonacciNumber($n){
        if($n<1)
            return 0;
        if($n==1)
            return $this->first;
        if($n==2)
            return $this->second;

        $a = $this->first;
        $b = $this->second;

        for($i=2; $i<$n; $i++){
            $new = $a + $b;
            $a = $b;
            $b = $new;
        }

        return $new;
    }

    public function getFibonacciNumbersUpToIndex($n){
        $fibonacci_numbers = array($this->first,
                                   $this->second
                                    );
        if($n<3){
           return $fibonacci_numbers;
        }

        for($i=3; $i<=$n; $i++){
            array_push($fibonacci_numbers,$this->getNthFibonacciNumber($i));
        }

        return $fibonacci_numbers;
    }

    public function getFibonacciNumbersUpToValue($value)
    {
        $a = $this->first;
        $b = $this->second;
        $fibonacci_number = $a+$b;

        $fibonacci_numbers = array($a,$b);

        while($a+$b < $value){
            $fibonacci_number = $a + $b;
            $a = $b;
            $b = $fibonacci_number;
            array_push($fibonacci_numbers,$fibonacci_number);
        }

        return $fibonacci_numbers;
    }
}
<?php

class Problem3{
    public function isPalindrome($number){
        if($number < 10)
            return true;

        $number_of_digits = strlen($number);
        $digit_combinations = array();

        for($i=0; $i<$number_of_digits; $i++){
            array_push($digit_combinations,$this->getDigitAtPosition($i,$number))==$this->getDigitAtPosition($number_of_digits-$i-1,$number);
        }

        if(count(array_unique($digit_combinations)) === 1)
            return current($digit_combinations);
        else
            return false;
    }

    public function getDigitAtPosition($position, $number){
        $number_as_string = (string) $number;

        if($position < strlen($number))
            return $number_as_string[$position];
        return null;
    }
}


$problem3 = new Problem3();
$problem3->isPalindrome(1000);

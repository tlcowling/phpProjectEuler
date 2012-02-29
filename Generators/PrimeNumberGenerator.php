<?php

class PrimeGenerator
{
    public static function get_prime_number($index){

        return 2;
    }

    public static function isPrime($testNumber)
    {
        return PrimeGenerator::basicIsPrime($testNumber);
    }

    public function basicIsPrime($testNumber)
    {
        $last_digit = $testNumber % 10;
        return !($last_digit == 2 ||
            $last_digit == 4 ||
            $last_digit == 5 ||
            $last_digit == 6 ||
            $last_digit == 8 ||
            $last_digit == 0
        );
    }
}

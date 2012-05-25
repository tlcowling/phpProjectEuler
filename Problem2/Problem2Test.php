<?php

include "Problem2.php";

class Problem2Test extends PHPUnit_Framework_TestCase
{
    public function test1stFibonacciNumberIsLessThan4000000()
    {
        $problem2 = new Problem2();
        $firstFibonacciNumber = 1;

        $this->assertTrue($problem2->isLessThan4Million($firstFibonacciNumber));
    }

    public function testSumOfFirst10FibonacciNumbersIs231(){
        $problem2 = new Problem2();
        $first10FibonacciNumbers = array(1,2,3,5,8,13,21,34,55,89);
        $sumOfFirst10FibonacciNumbers = 231;

        $this->assertEquals($problem2->calculateSumOfFibonacciArray($first10FibonacciNumbers),$sumOfFirst10FibonacciNumbers);
    }
}

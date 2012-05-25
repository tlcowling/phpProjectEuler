<?php

include "FibonacciGenerator.php";

class FibonacciTest extends PHPUnit_Framework_TestCase
{
    public function test1stFibonacciNumberIsZero()
    {
        $fib = new FibonacciGenerator();
        $this->assertEquals($fib->getNthFibonacciNumber(1),1);
    }

    public function test2stFibonacciNumberIsOne()
    {
        $fib = new FibonacciGenerator();
        $this->assertEquals($fib->getNthFibonacciNumber(2),2);
    }

    public function testIfFibonacciInputIsInvalidReturnExit(){
        $fib = new FibonacciGenerator();
        $this->assertEquals($fib->getNthFibonacciNumber(0),0);
        $this->assertEquals($fib->getNthFibonacciNumber(-2),0);
    }

    public function test3rdFibonacciNumberIsOne(){
        $fib = new FibonacciGenerator();
        $this->assertEquals($fib->getNthFibonacciNumber(3),3);
    }

    public function test4thFibonacciNumberIsTwo(){
        $fib = new FibonacciGenerator();
        $this->assertEquals($fib->getNthFibonacciNumber(4),5);
    }

    public function test5thFibonacciNumberIsThree(){
        $fib = new FibonacciGenerator();
        $this->assertEquals($fib->getNthFibonacciNumber(5),8);
    }

    public function test6thFibonacciNumberIsFive(){
        $fib = new FibonacciGenerator();
        $this->assertEquals($fib->getNthFibonacciNumber(6),13);
    }

    public function test7thFibonacciNumberIsEight(){
        $fib = new FibonacciGenerator();
        $this->assertEquals($fib->getNthFibonacciNumber(7),21);
    }

    public function test8thFibonacciNumberIsThirteen(){
        $fib = new FibonacciGenerator();
        $this->assertEquals($fib->getNthFibonacciNumber(8),34);
    }

    public function testFirst2FibonacciNumbersAreOneAndTwo(){
        $fib = new FibonacciGenerator();
        $expected = array(1,2);
        $this->assertEquals($fib->getFibonacciNumbersUpToIndex(2),$expected);
    }

    public function testFirst10FibonacciNumbersAreAsExpected(){
        $fib = new FibonacciGenerator();
        $expected = array(1,2,3,5,8,13,21,34,55,89);
        $this->assertEquals($fib->getFibonacciNumbersUpToIndex(10),$expected);
    }

    public function testFibonaciNumbersBelow100AreExpected(){
        $fib = new FibonacciGenerator();
        $expected = array(1,2,3,5,8,13,21,34,55,89);
        $this->assertEquals($fib->getFibonacciNumbersUpToValue(100),$expected);
    }
}

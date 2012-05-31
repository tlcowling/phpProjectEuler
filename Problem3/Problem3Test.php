<?php

include "Problem3.php";

class Problem3Test extends PHPUnit_Framework_TestCase
{
    public function testFirstDigitOf1000() {
        $problem3 = new Problem3();
        $this->assertEquals(1,$problem3->getDigitAtPosition(0,1000));
    }

    public function testCannotGetDigitAtPositionOutsideOfNumber(){
        $problem3 = new Problem3();
        $this->assertEquals(null,$problem3->getDigitAtPosition(10,1000));
    }

    public function testAllSingleDigitNumbersArePallindromes(){
        $problem3 = new Problem3();
        $this->assertTrue($problem3->isPalindrome(1));
        $this->assertTrue($problem3->isPalindrome(5));
        $this->assertTrue($problem3->isPalindrome(6));
        $this->assertTrue($problem3->isPalindrome(9));
    }

    public function testTwoDigitNumberPallindromes(){
        $problem3 = new Problem3();
        $this->assertTrue($problem3->isPalindrome(11));
        $this->assertTrue($problem3->isPalindrome(99));
        $this->assertFalse($problem3->isPalindrome(12));
        $this->assertFalse($problem3->isPalindrome(98));
    }

    public function testNumber100IsNotAPallindrome(){
        $problem3 = new Problem3();
        $this->assertFalse($problem3->isPalindrome(100));
    }

    public function testNumber101IsAPallindrome(){
        $problem3 = new Problem3();
        $this->assertTrue($problem3->isPalindrome(101));
    }


    public function test2(){

    }
}

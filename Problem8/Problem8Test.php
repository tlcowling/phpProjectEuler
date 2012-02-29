<?php

include "Problem8.php";

class Problem3Test extends PHPUnit_Framework_TestCase
{
    public function testStringProductOf11111Gives1() {
        $problem8 = new Problem8();
        $this->assertEquals(1,$problem8->strproduct("11111"));
    }

    public function testProductOf5252is100() {
        $problem8 = new Problem8();
        $this->assertEquals(100,$problem8->strproduct("5252"));
    }

    public function testProductOf14503isString0() {
        $problem8 = new Problem8();
        $this->assertEquals("0",$problem8->strproduct("14503"));
    }

    public function testProductOfFirstGroupOf5IsCorrect(){
        $problem8 = new Problem8();
        $this->assertEquals("1",$problem8->product_of_first_group_of_5
        ("11111"));
        $this->assertEquals("1",$problem8->product_of_first_group_of_5
        ("111119"));
    }

    public function testHighestProductOfGroupsOf5NumbersIsCorrect(){
        $problem8 = new Problem8();
        $this->assertEquals("2",$problem8->calculate_highest_product_in
        ("111112"));
    }

    public function testIfStringIsLessThan5LengthFunctionWillReturn0(){
        $problem8 = new Problem8();
        $this->assertEquals("0",$problem8->calculate_highest_product_in
        ("432"));
    }

    public function testIfStringIsLessThan5LengthFunctionWillReturnWhateverHighestProductWas(){
        $problem8 = new Problem8();
        $problem8->largest_product_of_5_digits=10;

        $this->assertEquals("10",$problem8->calculate_highest_product_in
        ("324"));
    }

    public function testIf(){

    }



//
//    public function testHighestSumOfFiveDigitsIn1234567(){
//        $problem16 = new Problem16();
//        $this->assertEquals(25,$problem16->calculate_sum_of_first_digits
//        ("1234567"));
//    }
//
//    public function testHighestSumOfFiveDigitsIn23456(){
//        $problem16 = new Problem16();
//        $this->assertEquals(20,$problem16->calculate_sum_of_first_digits
//        ("123456"));
//    }
}

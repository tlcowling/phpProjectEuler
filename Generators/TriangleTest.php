<?php

include "TriangleGenerator.php";

class TriangleTest extends PHPUnit_Framework_TestCase
{
    public function testFirstTriangleNumberIs1(){
        $testNumber = TriangleGenerator::get_triangle_number(1);

        $this->assertEquals(1,$testNumber);
    }

    public function testSecondTriangleNumberIs3(){
        $testNumber = TriangleGenerator::get_triangle_number(2);

        $this->assertEquals(3,$testNumber);
    }

    public function testThirdTriangleNumberIs6(){
        $testNumber = TriangleGenerator::get_triangle_number(3);

        $this->assertEquals(6,$testNumber);
    }

    public function testTriangleNumberFirstThreeTerms(){
        $terms = array(1,3,6);
        $testArray = TriangleGenerator::getTriangleNumbersUpTo(3);

        $this->assertEquals($terms,$testArray);
    }

    public function testTriangleNumberFirstFiveTerms(){
        $terms = array(1,3,6,10,15);
        $testArray = TriangleGenerator::getTriangleNumbersUpTo(5);

        $this->assertEquals($terms,$testArray);
    }
}

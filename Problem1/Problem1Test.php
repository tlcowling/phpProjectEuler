<?php

include 'Problem1.php';

class Problem1Test extends PHPUnit_Framework_TestCase
{
    public function test3IsAMultipleOf3Or5()
    {
        $problem1 = new Problem1();
        $this->assertTrue($problem1->isMultipleOf3Or5(3));
    }

    public function test5IsAMultipleOf3Or5()
    {
        $problem1 = new Problem1();
        $this->assertTrue($problem1->isMultipleOf3Or5(5));

    }

    public function test10IsAMultipleOf3Or5()
    {
        $problem1 = new Problem1();
        $this->assertTrue($problem1->isMultipleOf3Or5(10));
    }
}

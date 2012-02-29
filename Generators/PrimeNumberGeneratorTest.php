<?php

include "PrimeNumberGenerator.php";

class PrimeNumberGeneratorTest extends PHPUnit_Framework_TestCase
{
    public function testFirstPrimeNumberIs2(){
        $testNumber = PrimeGenerator::get_prime_number(1);
        $this->assertEquals(2,$testNumber);
    }

//    public function testSecondPrimeNumberIs3(){
//        $testNumber = PrimeGenerator::get_prime_number(2);
//        $this->assertEquals(3,$testNumber);
//    }

    public function testBasicPrimeNumberExcluder(){
        $this->assertFalse(PrimeGenerator::isPrime(100));
        $this->assertFalse(PrimeGenerator::isPrime(102));
        $this->assertFalse(PrimeGenerator::isPrime(104));
        $this->assertFalse(PrimeGenerator::isPrime(105));
        $this->assertFalse(PrimeGenerator::isPrime(106));
        $this->assertFalse(PrimeGenerator::isPrime(108));
    }
}

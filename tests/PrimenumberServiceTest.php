<?php

class PrimenumberService
{

    public static $_sepCharacter = ',';

    public function isPrime($val)
    {
        if ($val == 1) {
            return false;
        }
        $i = 2;
        while ($i < $val) {
            if ($val % $i) {
                $i++;
                continue;
            }
            return false;
        }
        return true;
    }

    public function printPrimes($number)
    {
        $primes = [];
        for ($i = 1; $i <= $number; $i++) {
            if ($this->isPrime($i)) {
                $primes[] = $i;
            }
        }
        return join(self::$_sepCharacter, $primes);
    }
}

class PrimenumberServiceTest extends \PHPUnit_Framework_TestCase
{
    private $ps;

    public function __construct()
    {
        $this->ps = new PrimenumberService();
    }

    public function testIsPrime()
    {
        foreach ([2, 3, 5, 7] as $val) {
            $this->assertTrue(true, $this->ps->isPrime($val));
        }
    }

    public function testIsNotPrime()
    {
        foreach ([4, 6, 8, 9, 10, 12] as $val) {
            $this->assertFalse(false, $this->ps->isPrime($val));
        }
    }

    public function testPrintPrimes()
    {
        $this->assertEquals('2,3,5,7,11,13,17,19,23,29,31,37,41,43,47,53,59,61,67,71,73,79,83,89,97',
            $this->ps->printPrimes(99));
    }
}



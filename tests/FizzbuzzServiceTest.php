<?php

class FizzbuzzServiceTest extends \PHPUnit_Framework_TestCase
{

    public function testGetOne()
    {
        $fb = new FizzbuzzService();
        $this->assertEquals('1', $fb->handle(1));
    }

    public function testGetFizz()
    {
        $fb = new FizzbuzzService();
        $this->assertEquals('Fizz', $fb->handle(3));
    }

    public function testGetBuzz()
    {
        $fb = new FizzbuzzService();
        $this->assertEquals('Buzz', $fb->handle(5));
    }

    public function testGetFizzBuzz()
    {
        $fb = new FizzbuzzService();
        $this->assertEquals('Fizz Buzz', $fb->handle(15));
    }
}

<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class HelloTest extends \PHPUnit_Framework_TestCase
{

    public function testAssertTrue()
    {
        $this->assertTrue(true, 'False is not true');
    }

    public function testAssertEquals()
    {
        $expected = 'foo';
        $actual   = 'foo';
        $this->assertEquals($expected, $actual, 'Expected is not equal actual');
    }
//
//    public function testAssertSame()
//    {
//        $calc = 1 + 1;
//        $this->assertSame('2', $calc, 'AssertSame is strict comparison');
//    }
}
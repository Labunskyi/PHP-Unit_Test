<?php
require 'Calculator.php';
 
class CalculatorTests extends PHPUnit_Framework_TestCase
{
    private $calculator;
 
    protected function setUp()
    {
        $this->calculator = new Calculator();
    }
 
    protected function tearDown()
    {
        $this->calculator = NULL;
    }
 
    public function testAdd()
    {
        $this->calculator->setValOne(2);
        $this->calculator->setValTwo(5);
        $result = $this->calculator->add();
        $this->assertEquals(7, $result);
    }

    public function testSubtract()
    {   
        $this->calculator->setValOne(2);
        $this->calculator->setValTwo(5);
        $result = $this->calculator->subtract();
        $this->assertEquals(-3, $result);
    }

    public function testMultiply()
    {   
        $this->calculator->setValOne(2);
        $this->calculator->setValTwo(5);
        $result = $this->calculator->multiply();
        $this->assertEquals(10, $result);
    }

    public function testDivide()
    {   
        $this->calculator->setValOne(6);
        $this->calculator->setValTwo(3);
        $result = $this->calculator->divide();
        $this->assertEquals(2, $result);
    }

    public function testDivideNumOneOnValOne()
    {   
        $this->calculator->setValOne(2);
        $result = $this->calculator->divideNumOneOnValOne();
        $this->assertEquals(0.5, $result);
    }

    public function testValOneOnPrecent()
    {   
        $this->calculator->setValOne(10);
        $result = $this->calculator->valOneOnPrecent();
        $this->assertEquals(0.1, $result);
    }

    public function testRoot()
    {   
        $this->calculator->setValOne(9);
        $result = $this->calculator->root();
        $this->assertEquals(3, $result);
    }
 
}


?>
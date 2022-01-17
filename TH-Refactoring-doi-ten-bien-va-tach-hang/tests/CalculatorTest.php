<?php

use PHPUnit\Framework\TestCase;

include_once "..\App\Calculator.php";
class CalculatorTest extends TestCase
{
    public function addtionTest()
    {
        $s = new Calculator();
        $firstOperand = 1;
        $secondOperand =1;
        $operand = "+";
        $result = $s->calculate($firstOperand,$secondOperand,$operand);
        $expect = 2;
        $this->assertEquals($expect,$result);

    }

}
<?php

namespace tests;

use StringCalculator;
use PHPUnit\Framework\TestCase;

class StringCalculatorTest extends TestCase
{
    private $stringCalculator;

    function setUp(): void
    {
        $this->stringCalculator = new StringCalculator();
    }

    function test_start_here()
    {
        $actual = $this->stringCalculator->calculate(1);
        $this->assertEquals('1', $actual);
    }
}

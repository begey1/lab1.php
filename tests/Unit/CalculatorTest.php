<?php

namespace Tests\Unit;

feature/cicd-pipeline
use App\Services\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function test_add(): void

use PHPUnit\Framework\TestCase;
use App\Services\Calculator;

class CalculatorTest extends TestCase
{
    public function test_add()
 main
    {
        $calculator = new Calculator();

        $this->assertEquals(5, $calculator->add(2, 3));
    }

 feature/cicd-pipeline
    public function test_subtract(): void

    public function test_subtract()
 main
    {
        $calculator = new Calculator();

        $this->assertEquals(3, $calculator->subtract(5, 2));
    }
}

<?php

declare(strict_types=1);

namespace Deg540\CleanCodeKata9\Test;

use Deg540\CleanCodeKata9\FizzBuzzKata;
use PHPUnit\Framework\TestCase;

final class FizzBuzzTest extends TestCase
{
    private FizzBuzzKata $fizzBuzz;

    protected function setUp()
    {
        parent::setUp();

        $this->fizzBuzz = new FizzBuzzKata();
    }

    /**
     * @test
     */
    public function given3ReturnsFizz(): void
    {
        // Act
        $result = $this->fizzBuzz->convert(3);

        // Assert
        $this->assertEquals('Fizz', $result);
    }

    /**
     * @test
     */
    public function given5ReturnsBuzz(): void
    {
        // Act
        $result = $this->fizzBuzz->convert(5);

        // Assert
        $this->assertEquals('Buzz', $result);
    }

    /**
     * @test
     */
    public function noMultipleOfThreeOrFiveReturnsNumber(): void
    {
        // Act
        $result = $this->fizzBuzz->convert(1);

        // Assert
        $this->assertEquals(1, $result);
    }

    /**
     * @test
     */
    public function multipleOf15ReturnsFizzBuzz(): void
    {
        // Act
        $result = $this->fizzBuzz->convert(15);

        // Assert
        $this->assertEquals('FizzBuzz', $result);
    }
}

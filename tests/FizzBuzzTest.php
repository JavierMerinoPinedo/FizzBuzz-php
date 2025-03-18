<?php

declare(strict_types=1);

namespace Deg540\CleanCodeKata9\Test;

use Deg540\CleanCodeKata9\FizzBuzzKata;
use PHPUnit\Framework\TestCase;

final class FizzBuzzTest extends TestCase
{
    private FizzBuzzKata $fizzBuzz;

    protected function setUp(): void
    {
        parent::setUp();

        $this->fizzBuzz = new FizzBuzzKata();
    }

    /**
     * @test
     */
    public function givenMultipleOfFizzBuzzNumberReturnsFizzBuzz(): void
    {
        // Act
        $result = $this->fizzBuzz->convert(30);

        // Assert
        $this->assertEquals('FizzBuzz', $result);
    }

    /**
     * @test
     */
    public function givenMultipleOfBuzzNumberReturnsBuzz(): void
    {
        // Act
        $result = $this->fizzBuzz->convert(10);

        // Assert
        $this->assertEquals('Buzz', $result);
    }

    /**
     * @test
     */
    public function givenMultipleOfFizzNumberReturnsFizz(): void
    {
        // Act
        $result = $this->fizzBuzz->convert(6);

        // Assert
        $this->assertEquals('Fizz', $result);
    }

    /**
     * @test
     */
    public function notMultipleOfFizzNumberOrBuzzNumberReturnsNumber(): void
    {
        // Act
        $result = $this->fizzBuzz->convert(1);

        // Assert
        $this->assertEquals(1, $result);
    }
}

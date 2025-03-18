<?php

declare(strict_types=1);

namespace Deg540\CleanCodeKata9\Test;

use Deg540\CleanCodeKata9\FizzBuzzKata;
use PHPUnit\Framework\TestCase;

final class FizzBuzzTest extends TestCase
{
    /**
     * @test
     */
    public function given3ReturnsFizz(): void
    {
        // Arrange
        $fizzBuzz = new FizzBuzzKata();

        // Act
        $result = $fizzBuzz->convert(3);

        // Assert
        $this->assertEquals('fizz', $result);
    }
}

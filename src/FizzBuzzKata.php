<?php

namespace Deg540\CleanCodeKata9;

class FizzBuzzKata
{
    private const int FIZZ_NUMBER = 3;
    private const int BUZZ_NUMBER = 5;

    public function convert(int $number): ?string
    {
        if($this->isFizzBuzz($number)){
            return 'FizzBuzz';
        }

        if($this->isBuzz($number)){
            return 'Buzz';
        }

        if($this->isFizz($number)){
            return 'Fizz';
        }

        return $number;
    }

    public function isFizz(int $number): bool
    {
        return ($number % self::FIZZ_NUMBER) == 0;
    }

    public function isBuzz(int $number): bool
    {
        return ($number % self::BUZZ_NUMBER) == 0;
    }

    private function isFizzBuzz(int $number): bool
    {
        return ($this->isFizz($number) && $this->isBuzz($number));
    }
}

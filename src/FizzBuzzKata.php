<?php

namespace Deg540\CleanCodeKata9;

class FizzBuzzKata
{
    public function convert(int $number): ?string
    {
        if($number == 15){
            return 'FizzBuzz';
        }

        if($number == 5){
            return 'Buzz';
        }

        if($number == 3){
            return 'Fizz';
        }

        return $number;
    }
}

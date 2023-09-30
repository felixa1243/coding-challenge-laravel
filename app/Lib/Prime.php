<?php

namespace App\Lib;

class Prime
{
    public static function isPrime(int $number)
    {
        if ($number == 0) return false;
        for ($i = 2; $i <= $number / 2; $i++) {
            if ($number % $i == 0) return false;
        }
        return true;
    }
}

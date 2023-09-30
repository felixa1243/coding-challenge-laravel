<?php

namespace App\Lib;

class Sort
{
    public static function sort(string $word)
    {
        $charString = str_split($word);
        sort($charString);
        return implode("",$charString);
    }
}

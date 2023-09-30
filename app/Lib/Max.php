<?php

namespace App\Lib;

class Max
{
    public static function findMax(array $arr)
    {
        $biggest = $arr[0];
        for ($i = 0; $i < sizeof($arr); $i++) {
            if ($arr[$i] > $biggest) {
                $biggest = $arr[$i];
            }
        }
        return $biggest;
    }
}

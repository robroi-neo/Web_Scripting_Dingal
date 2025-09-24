<?php

class Validator
{
    public static function string(string $str, int $min = 1, int $max = 255): bool
    {
        $str = trim($str);
        $len = strlen($str);
        return $len >= $min && $len <= $max;
    }
}

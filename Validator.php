<?php

class Validator
{
    public static function string(string $str, int $min = 1, int $max = 255): bool
    {
        $str = trim($str);
        $len = strlen($str);
        return $len >= $min && $len <= $max;
    }

    public static function compareStrings(string $str1, string $str2): bool
    {
        return strcmp($str1, $str2) === 0;
    }

    // Radio / Single choice 
    public static function inArray(?string $value, array $allowed): bool
    {
        return !empty($value) && in_array($value, $allowed, true);
    }

    // Checkbox group
    public static function arrayInArray(?array $values, array $allowed, int $min = 1): bool
    {
        if (empty($values) || !is_array($values) || count($values) < $min) {
            return false;
        }
        foreach ($values as $val) {
            if (!in_array($val, $allowed, true)) {
                return false;
            }
        }
        return true;
    }

    // Dropdown 
    public static function select(?string $value, array $allowed): bool
    {
        return !empty($value) && in_array($value, $allowed, true);
    }
}

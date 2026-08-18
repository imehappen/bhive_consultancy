<?php

declare(strict_types=1);

namespace App\Helpers;

class Str
{
    public static function slug(string $string): string
    {
        $string = mb_strtolower(trim($string));
        $string = preg_replace('/[^a-z0-9\s-]/', '', $string);
        $string = preg_replace('/[\s-]+/', '-', $string);
        return trim($string, '-');
    }

    public static function title(string $string): string
    {
        return mb_convert_case($string, MB_CASE_TITLE, 'UTF-8');
    }

    public static function limit(string $string, int $length = 100, string $suffix = '...'): string
    {
        if (mb_strlen($string) <= $length) {
            return $string;
        }

        return mb_substr(rtrim($string), 0, $length) . $suffix;
    }
}

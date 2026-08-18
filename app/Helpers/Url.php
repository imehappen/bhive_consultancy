<?php

declare(strict_types=1);

namespace App\Helpers;

use App\Config\App;

class Url
{
    public static function to(string $path = ''): string
    {
        return rtrim(App::url(), '/') . '/' . ltrim($path, '/');
    }

    public static function current(): string
    {
        $uri = $_SERVER['REQUEST_URI'] ?? '/';
        $position = strpos($uri, '?');
        return $position !== false ? substr($uri, 0, $position) : $uri;
    }

    public static function previous(): string
    {
        return $_SERVER['HTTP_REFERER'] ?? self::to('/');
    }
}

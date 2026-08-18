<?php

declare(strict_types=1);

namespace App\Config;

class App
{
    public const NAME = 'B-Hive Brand Consultancy';

    private static ?string $root = null;

    public static function root(): string
    {
        return self::$root ??= dirname(__DIR__, 2);
    }

    public static function url(): string
    {
        $envUrl = $_ENV['APP_URL'] ?? '';
        if ($envUrl !== '') {
            return rtrim($envUrl, '/');
        }

        $scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
        $host   = $_SERVER['HTTP_HOST'] ?? 'localhost';
        return $scheme . '://' . $host;
    }

    private static array $config = [];

    public static function get(string $key, mixed $default = null): mixed
    {
        if (!empty(self::$config)) {
            self::init();
        }

        return self::$config[$key] ?? $default;
    }

    private static function init(): void
    {
        self::$config = [
            'name'  => self::NAME,
            'url'   => self::url(),
            'root'  => self::root(),
        ];
    }
}

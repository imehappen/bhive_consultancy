<?php

declare(strict_types=1);

namespace App\Config;

class Database
{
    public static function host(): string
    {
        return getenv('DB_HOST') ?: '127.0.0.1';
    }

    public static function dbname(): string
    {
        return getenv('DB_NAME') ?: 'bhive_consultancy';
    }

    public static function username(): string
    {
        return getenv('DB_USER') ?: 'root';
    }

    public static function password(): string
    {
        return getenv('DB_PASS') ?: '';
    }

    public static function port(): string
    {
        return getenv('DB_PORT') ?: '3306';
    }

    public static function dsn(): string
    {
        return sprintf(
            'mysql:host=%s;port=%s;dbname=%s;charset=utf8mb4',
            self::host(),
            self::port(),
            self::dbname()
        );
    }
}

<?php

declare(strict_types=1);

namespace App\Config;

class Routes
{
    public static function load(): void
    {
        require dirname(__DIR__, 2) . '/routes/web.php';
        require dirname(__DIR__, 2) . '/routes/api.php';
    }
}

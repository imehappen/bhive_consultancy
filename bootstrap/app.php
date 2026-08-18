<?php

declare(strict_types=1);

$root = dirname(__DIR__);

// Load Composer autoloader
require_once $root . '/vendor/autoload.php';

// Load .env file manually (dotenv package not installed)
$envFile = $root . '/.env';
if (file_exists($envFile)) {
    $lines = file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        $line = trim($line);
        if ($line === '' || $line[0] === '#') {
            continue;
        }
        if (str_contains($line, '=')) {
            [$key, $value] = explode('=', $line, 2);
            $key = trim($key);
            $value = trim($value, " \t\n\r\0\x0B\"'");
            $_ENV[$key] = $value;
            putenv("$key=$value");
        }
    }
}

// Load helpers
require_once $root . '/app/Helpers/Functions.php';

// Create and return the application
$app = new App\Core\Application();

return $app;

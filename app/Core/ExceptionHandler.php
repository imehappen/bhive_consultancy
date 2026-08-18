<?php

declare(strict_types=1);

namespace App\Core;

use App\Exceptions\NotFoundException;
use App\Exceptions\ValidationException;
use Throwable;

class ExceptionHandler
{
    private bool $debug;

    public function __construct(bool $debug = false)
    {
        $this->debug = $debug;
    }

    public function render(Request $request, Throwable $e): void
    {
        $code = $this->getStatusCode($e);

        http_response_code($code);
        header('Content-Type: text/html; charset=UTF-8');

        if ($request->isAjax() || str_contains($request->header('Accept', ''), 'application/json')) {
            http_response_code($code);
            header('Content-Type: application/json');
            echo json_encode([
                'error'   => true,
                'status'  => $code,
                'message' => $e->getMessage(),
                'trace'   => $this->debug ? $e->getTraceAsString() : null,
            ]);
            return;
        }

        $viewFile = dirname(__DIR__) . '/Views/errors/' . $code . '.php';

        if (file_exists($viewFile)) {
            $title   = $this->getTitle($code);
            $message = $e->getMessage();
            $trace   = $this->debug ? $e->getTraceAsString() : null;
            include $viewFile;
            return;
        }

        $this->renderDefaultError($code, $e);
    }

    private function getStatusCode(Throwable $e): int
    {
        return match (true) {
            $e instanceof NotFoundException    => 404,
            $e instanceof ValidationException  => 422,
            default                            => 500,
        };
    }

    private function getTitle(int $code): string
    {
        return match ($code) {
            404 => 'Page Not Found',
            422 => 'Validation Error',
            default => 'Server Error',
        };
    }

    private function renderDefaultError(int $code, Throwable $e): void
    {
        $title = $this->getTitle($code);
        $description = match ($code) {
            404 => 'The page you are looking for could not be found.',
            422 => $e->getMessage(),
            default => $this->debug ? $e->getMessage() : 'An unexpected error occurred.',
        };
        $trace = $this->debug ? $e->getTraceAsString() : null;

        echo <<<HTML
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>{$code} {$title}</title>
            <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
            <style>
                * { margin: 0; padding: 0; box-sizing: border-box; }
                body { font-family: 'Inter', sans-serif; background: #0d0d0d; color: #fff; min-height: 100vh; display: flex; align-items: center; justify-content: center; text-align: center; padding: 2rem; }
                .container { max-width: 600px; }
                h1 { font-size: 7rem; font-weight: 700; color: #e0b20e; line-height: 1; margin-bottom: 0.5rem; }
                h2 { font-size: 1.8rem; font-weight: 600; margin-bottom: 1rem; }
                p { color: #999; font-size: 1.05rem; margin-bottom: 2rem; }
                a { display: inline-block; background: #e0b20e; color: #0d0d0d; padding: 0.75rem 2rem; border-radius: 50px; text-decoration: none; font-weight: 600; transition: all 0.3s ease; }
                a:hover { background: #b8920c; transform: translateY(-2px); }
                .trace { background: rgba(255,255,255,0.05); border-radius: 8px; padding: 1rem; margin-top: 2rem; text-align: left; overflow-x: auto; }
                .trace pre { color: #e0b20e; font-size: 0.8rem; white-space: pre-wrap; }
            </style>
        </head>
        <body>
            <div class="container">
                <h1>{$code}</h1>
                <h2>{$title}</h2>
                <p>{$description}</p>
                <a href="/">Back to Home</a>
            </div>
        </body>
        </html>
        HTML;
    }
}

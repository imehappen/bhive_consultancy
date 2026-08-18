<?php

declare(strict_types=1);

namespace App\Core;

class Response
{
    private int $statusCode = 200;
    private array $headers = [];

    public function json(mixed $data, int $code = 200): static
    {
        $this->statusCode = $code;
        $this->headers['Content-Type'] = 'application/json';
        $this->headers['X-Content-Type-Options'] = 'nosniff';

        http_response_code($code);
        header('Content-Type: application/json');
        header('X-Content-Type-Options: nosniff');

        echo json_encode($data, JSON_UNESCAPED_UNICODE | JSON_THROW_ON_ERROR);
        return $this;
    }

    public function redirect(string $url, int $code = 302): static
    {
        $this->statusCode = $code;

        http_response_code($code);
        header("Location: {$url}");
        return $this;
    }

    public function setHeader(string $name, string $value): static
    {
        $this->headers[$name] = $value;
        header("{$name}: {$value}");
        return $this;
    }

    public function statusCode(int $code): static
    {
        $this->statusCode = $code;
        http_response_code($code);
        return $this;
    }

    public function send(): void
    {
        foreach ($this->headers as $name => $value) {
            header("{$name}: {$value}");
        }
        http_response_code($this->statusCode);
    }

    public function getStatusCode(): int
    {
        return $this->statusCode;
    }

    public function getHeaders(): array
    {
        return $this->headers;
    }
}

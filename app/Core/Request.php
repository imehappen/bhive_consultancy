<?php

declare(strict_types=1);

namespace App\Core;

class Request
{
    private array $query;
    private array $post;
    private array $server;
    private array $cookies;

    public function __construct()
    {
        $this->query   = $_GET;
        $this->post    = $_POST;
        $this->server  = $_SERVER;
        $this->cookies = $_COOKIE;
    }

    public function uri(): string
    {
        $uri = $this->server['REQUEST_URI'] ?? '/';
        $uri = parse_url($uri, PHP_URL_PATH);
        $uri = '/' . trim($uri, '/');
        return $uri === '' ? '/' : $uri;
    }

    public function method(): string
    {
        return strtoupper($this->server['REQUEST_METHOD'] ?? 'GET');
    }

    public function isGet(): bool
    {
        return $this->method() === 'GET';
    }

    public function isPost(): bool
    {
        return $this->method() === 'POST';
    }

    public function input(string $key, mixed $default = null): mixed
    {
        if (isset($this->post[$key])) {
            return $this->post[$key];
        }
        if (isset($this->query[$key])) {
            return $this->query[$key];
        }
        return $default;
    }

    public function all(): array
    {
        return array_merge($this->query, $this->post);
    }

    public function hasInput(string $key): bool
    {
        return isset($this->post[$key]) || isset($this->query[$key]);
    }

    public function header(string $name, mixed $default = null): mixed
    {
        $name = 'HTTP_' . strtoupper(str_replace('-', '_', $name));
        return $this->server[$name] ?? $default;
    }

    public function json(): ?array
    {
        $content = file_get_contents('php://input');
        $data = json_decode($content, true);
        return is_array($data) ? $data : null;
    }

    public function isAjax(): bool
    {
        return $this->header('X-Requested-With') === 'XMLHttpRequest';
    }

    public function getServer(string $key, mixed $default = null): mixed
    {
        return $this->server[$key] ?? $default;
    }
}

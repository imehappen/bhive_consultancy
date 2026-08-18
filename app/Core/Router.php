<?php

declare(strict_types=1);

namespace App\Core;

use App\Core\Container;
use App\Core\Request;
use App\Exceptions\NotFoundException;

class Router
{
    private array $routes = [];
    private string $groupPrefix = '';
    private Container $container;

    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    public function get(string $path, string $handler): void
    {
        $this->addRoute('GET', $path, $handler);
    }

    public function post(string $path, string $handler): void
    {
        $this->addRoute('POST', $path, $handler);
    }

    public function put(string $path, string $handler): void
    {
        $this->addRoute('PUT', $path, $handler);
    }

    public function delete(string $path, string $handler): void
    {
        $this->addRoute('DELETE', $path, $handler);
    }

    public function group(string $prefix, callable $callback): void
    {
        $previousPrefix = $this->groupPrefix;
        $this->groupPrefix = $previousPrefix . '/' . trim($prefix, '/');
        $callback($this);
        $this->groupPrefix = $previousPrefix;
    }

    public function loadRoutes(): void
    {
        $root  = dirname(__DIR__, 2);
        $router = $this;

        $webFile = $root . '/routes/web.php';
        $apiFile = $root . '/routes/api.php';

        if (file_exists($webFile)) {
            require $webFile;
        }
        if (file_exists($apiFile)) {
            require $apiFile;
        }
    }

    public function dispatch(Request $request): void
    {
        $uri    = $request->uri();
        $method = $request->method();

        foreach ($this->routes as $route) {
            if ($route['method'] !== $method) {
                continue;
            }

            $params = $this->matchRoute($route['path'], $uri);

            if ($params !== false) {
                $this->callHandler($route['handler'], $params);
                return;
            }
        }

        throw new NotFoundException("No route matched [{$method}] {$uri}");
    }

    private function addRoute(string $method, string $path, string $handler): void
    {
        $fullPath = $this->groupPrefix . '/' . trim($path, '/');
        $fullPath = $fullPath === '' ? '/' : $fullPath;

        $this->routes[] = [
            'method'  => $method,
            'path'    => $fullPath,
            'handler' => $handler,
        ];
    }

    private function matchRoute(string $routePath, string $uri): array|false
    {
        $routeParts = explode('/', trim($routePath, '/'));
        $uriParts   = explode('/', trim($uri, '/'));

        if (count($routeParts) !== count($uriParts)) {
            return false;
        }

        $params = [];

        foreach ($routeParts as $index => $part) {
            if (str_starts_with($part, '{') && str_ends_with($part, '}')) {
                $paramName = trim($part, '{}');
                $params[$paramName] = urldecode($uriParts[$index]);
            } elseif ($part !== $uriParts[$index]) {
                return false;
            }
        }

        return $params;
    }

    private function callHandler(string $handler, array $params): void
    {
        if (!str_contains($handler, '@')) {
            throw new \InvalidArgumentException("Invalid handler format: {$handler}. Expected Controller@method.");
        }

        [$controllerClass, $methodName] = explode('@', $handler, 2);

        $fqcn = "App\\Controllers\\{$controllerClass}";

        if (!class_exists($fqcn)) {
            throw new NotFoundException("Controller class [{$controllerClass}] not found.");
        }

        $controller = new $fqcn($this->container);

        if (!method_exists($controller, $methodName)) {
            throw new NotFoundException("Method [{$methodName}] not found on [{$controllerClass}].");
        }

        call_user_func_array([$controller, $methodName], $params);
    }

    public function getRoutes(): array
    {
        return $this->routes;
    }
}

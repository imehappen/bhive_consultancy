<?php

declare(strict_types=1);

namespace App\Core;

class Container
{
    private array $bindings = [];
    private array $instances = [];

    public function set(string $key, mixed $value): void
    {
        $this->bindings[$key] = $value;
        unset($this->instances[$key]);
    }

    public function get(string $key): mixed
    {
        if (array_key_exists($key, $this->instances)) {
            return $this->instances[$key];
        }

        if (!array_key_exists($key, $this->bindings)) {
            throw new \RuntimeException("No binding found for [{$key}]");
        }

        $value = $this->bindings[$key];

        if (is_callable($value)) {
            $value = $value($this);
        }

        $this->instances[$key] = $value;

        return $value;
    }

    public function has(string $key): bool
    {
        return array_key_exists($key, $this->bindings) || array_key_exists($key, $this->instances);
    }
}

<?php

declare(strict_types=1);

namespace App\Core;

class Model
{
    protected static string $table = '';
    protected static array $fillable = [];

    public static function db(): Database
    {
        return Database::getInstance();
    }

    public static function all(): array
    {
        return static::db()->fetchAll("SELECT * FROM " . static::$table);
    }

    public static function find(int|string $id): ?array
    {
        return static::db()->fetch(
            "SELECT * FROM " . static::$table . " WHERE id = ?",
            [$id]
        );
    }

    public static function where(string $column, mixed $value): array
    {
        return static::db()->fetchAll(
            "SELECT * FROM " . static::$table . " WHERE {$column} = ?",
            [$value]
        );
    }

    public static function create(array $data): string
    {
        $data = static::filterFillable($data);
        return static::db()->insert(static::$table, $data);
    }

    public function update(array $data): int
    {
        $data = static::filterFillable($data);
        return static::db()->update(
            static::$table,
            $data,
            'id = ?',
            [$this->id ?? null]
        );
    }

    public function delete(): int
    {
        return static::db()->delete(
            static::$table,
            'id = ?',
            [$this->id ?? null]
        );
    }

    public static function count(): int
    {
        $result = static::db()->fetch(
            "SELECT COUNT(*) as count FROM " . static::$table
        );
        return (int)($result['count'] ?? 0);
    }

    public static function orderBy(string $column, string $direction = 'ASC'): array
    {
        $direction = strtoupper($direction) === 'DESC' ? 'DESC' : 'ASC';
        return static::db()->fetchAll(
            "SELECT * FROM " . static::$table . " ORDER BY {$column} {$direction}"
        );
    }

    public static function limit(int $limit, int $offset = 0): array
    {
        return static::db()->fetchAll(
            "SELECT * FROM " . static::$table . " LIMIT {$limit} OFFSET {$offset}"
        );
    }

    public static function paginate(int $page = 1, int $perPage = 15): array
    {
        $offset = ($page - 1) * $perPage;
        $total  = static::count();
        $data   = static::limit($perPage, $offset);

        return [
            'data'       => $data,
            'total'      => $total,
            'page'       => $page,
            'per_page'   => $perPage,
            'last_page'  => (int)ceil($total / $perPage),
        ];
    }

    private static function filterFillable(array $data): array
    {
        if (empty(static::$fillable)) {
            return $data;
        }
        return array_intersect_key($data, array_flip(static::$fillable));
    }

    public static function getTable(): string
    {
        return static::$table;
    }
}

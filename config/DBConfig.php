<?php

namespace Delvego\PhpUpper\Config;

class DBConfig {
    public static function get(): array
    {
        return [
            'user' => self::getUser(),
            'pass' => self::getPass(),
            'DSN' => self::getDSN()
        ];
    }

    private static function getEnv($key, $default = null)
    {
        var_dump($_ENV);
        if (array_key_exists($key, $_ENV)) {
            return $_ENV[$key];
        }
        return $default;
    }

    private static function getUser(): string
    {
        return self::getEnv('DB_USER', 'user');
    }

    private static function getPass(): string
    {
        return self::getEnv('DB_PASS', 'pass');
    }

    private static function getDSN(): string
    {
        $driver = self::getEnv('DB_DRIVER', 'mysql');
        $host = self::getEnv('DB_HOST', 'mysql');
        $name = self::getEnv('DB_NAME', 'db-php-upper-level');
        return "{$driver}:host={$host};dbname={$name}";
    }
}

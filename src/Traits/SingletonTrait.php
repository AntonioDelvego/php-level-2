<?php
namespace Delvego\PhpUpper\Traits;

trait SingletonTrait
{
    private static null|object $instance = null;

    private function __construct()
    {
        $this->init();
    }

    abstract protected function init();

    public static function getInstance(): object
    {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    protected function __clone() {}
    protected function __sleep() {}
    protected function __wakeup() {}
}

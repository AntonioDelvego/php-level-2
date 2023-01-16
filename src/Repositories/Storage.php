<?php

namespace Delvego\PhpUpper\Repositories;

interface Storage
{
    public function generateId(): int;
    public function save($storageData): void;
    public function retrieve(int $id);
    public function delete(int $id);
    public function clean(): void;
}

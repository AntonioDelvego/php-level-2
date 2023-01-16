<?php

namespace Delvego\PhpUpper\Repositories;

use Delvego\PhpUpper\Models\Blog\Post;

abstract class Repository
{
    abstract public function add($entity);

    abstract public function get(int $id);
}

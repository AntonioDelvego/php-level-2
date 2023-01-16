<?php

namespace Delvego\PhpUpper\Repositories;

use Delvego\PhpUpper\Models\Blog\Post;
use Delvego\PhpUpper\Repositories\Storage;

class PostRepository extends Repository
{
    public function __construct(
        private readonly Storage $storage
    ) {}


    /**
     * @param Post $entity
     * @return void
     */
    public function add($entity): void
    {
        $this->storage->save($entity);
    }

    function get(int $id)
    {
        return $this->storage->retrieve($id);
    }
}

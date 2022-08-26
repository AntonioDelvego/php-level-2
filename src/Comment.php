<?php

namespace Delvego\PhpUpper;

class Comment
{
    /**
     * @param string $id
     * @param string $author_id
     * @param string $blog_id
     * @param string $text
     */
    public function __construct(
        private readonly string $id,
        private readonly string $author_id,
        private readonly string $blog_id,
        private readonly string $text,
    ){}

    public function __toString(): string
    {
        return "$this->author_id says => $this->text";
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getAuthorId(): string
    {
        return $this->author_id;
    }

    /**
     * @return string
     */
    public function getBlogId(): string
    {
        return $this->blog_id;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }
}

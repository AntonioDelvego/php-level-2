<?php

namespace Delvego\PhpUpper\Models\Blog;

class Post
{
    /**
     * @param string $id
     * @param string $authorId
     * @param string $title
     * @param string $text
     */
    public function __construct(
        private readonly string $id,
        private readonly string $authorId,
        private readonly string $title,
        private readonly string $text,
    ){}

    public function __toString(): string
    {
        return "$this->title: $this->text";
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
        return $this->authorId;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }
}

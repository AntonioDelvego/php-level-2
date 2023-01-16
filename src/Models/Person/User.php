<?php

namespace Delvego\PhpUpper\Models\Person;

class User
{
    public function __construct(
        private readonly string $id,
        private readonly string $name,
        private string $lastname,
    ){}

    public function __toString(): string
    {
        return "Hi! I'm $this->name $this->lastname";
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
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    public function changLastname(string $newLastname):void
    {
        $this->lastname = $newLastname;
    }
}

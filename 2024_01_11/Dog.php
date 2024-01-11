<?php

namespace App;

class Dog extends Animal
{
    protected string $breed;

    public function __construct(string $name, string $breed)
    {
        parent::__construct($name);
        $this->breed = $breed;
    }

    public function speak(): string
    {
        return 'Woof!';
    }
}

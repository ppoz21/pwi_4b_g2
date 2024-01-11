<?php

namespace App;

abstract class Animal implements AnimalInterface
{
    protected string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

//    abstract public function speak(): string;
}

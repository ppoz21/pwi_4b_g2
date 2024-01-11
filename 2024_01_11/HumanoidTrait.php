<?php

namespace App;

trait HumanoidTrait
{
    public function speak(): string
    {
        return 'Hello!';
    }

    public function think(): string
    {
        return 'I think, therefore I am.';
    }
}

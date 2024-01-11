<?php

namespace App;

interface HumanInterface extends AnimalInterface
{
    public function think(): string;
}
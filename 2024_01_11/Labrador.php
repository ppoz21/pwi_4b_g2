<?php

namespace App;

final class Labrador extends Dog
{
    public function __construct(string $name)
    {
        parent::__construct($name, 'Labrador');
    }
}

<?php

namespace App;

class Circle implements ShapeInterface
{
    public $radius;

    public function __construct($radius,)
    {
        $this->radius = $radius;
    }
}

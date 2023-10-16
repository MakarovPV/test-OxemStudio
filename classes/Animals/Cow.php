<?php

namespace Classes\Animals;

class Cow extends Animal
{
    public function __construct()
    {
        parent::__construct();
        $this->product = 'milk';
    }

    public function getCountOfProducts()
    {
        return rand(8, 12);
    }
}
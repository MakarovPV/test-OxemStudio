<?php

namespace Classes\Animals;

class Chicken extends Animal
{
    public function __construct()
    {
        parent::__construct();
        $this->product = 'egg';
    }

    public function getCountOfProducts()
    {
        return rand(0, 1);
    }
}
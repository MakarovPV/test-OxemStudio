<?php

namespace Classes\Animals;

abstract class Animal
{
    protected int $id;
    protected string $product;

    public function __construct()
    {
        $this->id = intval(bin2hex(random_bytes(10)));
    }

    protected abstract function getCountOfProducts();

    public function getProductName()
    {
        return $this->product;
    }

    public function getId()
    {
        return $this->id;
    }
}
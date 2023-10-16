<?php

namespace Classes\Factories;

use Classes\Animals\Animal;

interface Factory
{
    public static function factoryMethod(string $animalName): Animal;
}
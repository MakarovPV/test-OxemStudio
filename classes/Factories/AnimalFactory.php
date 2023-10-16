<?php

namespace Classes\Factories;

use Classes\Animals\Animal;
use Classes\Animals\Chicken;
use Classes\Animals\Cow;

class AnimalFactory implements Factory
{
    public static function factoryMethod(string $animalName) : Animal
    {
        switch ($animalName){
            case 'cow': return new Cow();
            case 'chicken': return new Chicken();
        }
    }
}
<?php

namespace Classes;

use Classes\Statistics\AllTimeStat;
use Classes\Statistics\AnimalStat;
use Classes\Statistics\WeekStat;
use Classes\Factories\AnimalFactory;

class Farm
{
    private array $animals = [];
    private array $productStat = [];
    private array $lastWeekStat = [];

    public function addAnimal(string $animalName, int $countAnimals)
    {
        $animal = AnimalFactory::factoryMethod($animalName);
        for ($i = 0; $i < $countAnimals; $i++) {
            $this->animals[$animalName][] = $animal;
        }
    }

    public function collectProducts(int $daysCount = 7)
    {
        foreach ($this->animals as $key => $value) {
            $countProducts = 0;
            foreach ($this->animals[$key] as $val) {
                $countProducts += $val->getCountOfProducts() * $daysCount;
                $product = $val->getProductName();
                $this->lastWeekStat[$product] = $countProducts;
            }
            if (!isset($this->productStat[$product])) $this->productStat[$product] = 0;
            $this->productStat[$product] += $countProducts;
        }
    }

    public function getAnimalsStat()
    {
        echo AnimalStat::getStat($this->animals);
    }

    public function getAllStat()
    {
        echo AllTimeStat::getStat($this->productStat);
    }

    public function getWeekStat()
    {
        echo WeekStat::getStat($this->lastWeekStat);
    }
}
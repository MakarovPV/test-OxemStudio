<?php
require_once __DIR__ . '/vendor/autoload.php';

use Classes\Farm;


$farm = new Farm();

$farm->addAnimal('cow', 10);
$farm->addAnimal('chicken', 20);
$farm->getAnimalsStat();

$farm->collectProducts(7);
$farm->getWeekStat();

$farm->addAnimal('cow', 1);
$farm->addAnimal('chicken', 5);
$farm->getAnimalsStat();

$farm->collectProducts(7);
$farm->getWeekStat();

$farm->getAllStat();
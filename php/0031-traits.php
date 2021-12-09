<?php

// Late static binding
// https://youtu.be/4W5t8g3Rp_0

// Traits:
//https://youtu.be/PMruqUC4Qpc

declare(strict_types=1);

namespace TraitsNamespace;

class CoffeeMaker
{
    public function makeCoffee()
    {
        echo static::class . ' is making coffee' . PHP_EOL;
    }
}

trait LatteTrait
{
    public function makeLatte()
    {
        echo static::class . ' is making latte' . PHP_EOL;
    }
}

trait CappuccinoTrait
{
    public function makeCappuccino()
    {
        echo static::class . ' is making cappuccino' . PHP_EOL;
    }
}

class LatteMaker extends CoffeeMaker
{
    use LatteTrait;
}

class CappuccinoMaker extends CoffeeMaker
{
    use CappuccinoTrait;
}

class AllInOneCoffeeMaker extends CoffeeMaker
{
    use LatteTrait;
    use CappuccinoTrait;
}

$coffeeMaker = new CoffeeMaker();
$coffeeMaker->makeCoffee(); // CoffeeMaker is making coffee

$latteMaker = new LatteMaker();
$latteMaker->makeCoffee(); // LatteMaker is making coffee
$latteMaker->makeLatte(); // LatteMaker is making latte

$cappuccinoMaker = new CappuccinoMaker();
$cappuccinoMaker->makeCoffee(); // CappuccinoMaker is making coffee
$cappuccinoMaker->makeCappuccino(); // CappuccinoMaker is making cappuccino

$allInOneCoffeeMaker = new AllInOneCoffeeMaker();
$allInOneCoffeeMaker->makeCoffee(); // AllInOneCoffeeMaker is making coffee
$allInOneCoffeeMaker->makeLatte(); // AllInOneCoffeeMaker is making latte
$allInOneCoffeeMaker->makeCappuccino(); // AllInOneCoffeeMaker is making cappuccino

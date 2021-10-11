<?php

declare(strict_types=1);

namespace Inheritance;

// Multiple inheritance not supported

class Animal
{
    protected int $legs_num = 4;

    public function __construct()
    {
    }

    public function name(): string
    {
        return 'Animal';
    }

    // final: no overridable
    final public function getLegsNum():int
    {
        return $this->legs_num;
    }
}

class Dog extends Animal
{
    public function __construct()
    {
        parent::__construct();
    }

    public function name(): string
    {
        return 'Dog';
    }
}

class Duck extends Animal
{
    protected int $legs_num = 2;

    public function name(): string
    {
        return 'Duck';
    }
}

$duck = new Duck();
var_dump($duck->getLegsNum()); // 2
var_dump($duck->name()); // Duck

printName($duck); // Duck

function printName(Animal $animal){
    echo $animal->name();
}


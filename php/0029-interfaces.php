<?php

namespace Interfaces;

interface DebtCollectorInterface extends AnotherInterface {
    public function __construct();
    public function collect(float $amount): float;
}

interface  AnotherInterface{
    public function foo();
}

interface SomeAnotherInterface
{
    //public int $x; // Error: interfaces may not include member variables
    public const MY_CONSTANT = 1; // ok
}

class DebtCollectionService
{
    public function collectDebt(DebtCollectorInterface $collector){
        $amount = mt_rand(100, 1000);
        $collectedAmount = $collector->collect($amount);
        echo 'Collected $' . $collectedAmount . ' out of $' . $amount . PHP_EOL;
    }
}

class CollectionAgency implements DebtCollectorInterface, SomeAnotherInterface
{

    public function __construct()
    {
    }

    public function collect(float $amount): float
    {
        $guaranteed = $amount * 0.5;
        return mt_rand($guaranteed, $amount);
    }

    public function foo()
    {
    }
}

class RockyAgency implements DebtCollectorInterface
{

    public function __construct()
    {
    }

    public function collect(float $amount): float
    {
        return $amount * 0.6;
    }

    public function foo()
    {
        // TODO: Implement foo() method.
    }
}

$service = new DebtCollectionService();

echo $service->collectDebt(new RockyAgency()) . PHP_EOL;
echo $service->collectDebt(new CollectionAgency()) . PHP_EOL;
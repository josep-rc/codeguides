<?php

declare(strict_types=1);

class TransactionPro
{
    private string $description = '';

    public function __construct(
        string       $description,   // public by default
        public float $amount = 0,    // promoted property with default value
        public ?float $tax = null    // nullable promoted property
    )
    {
        $this->description = $description;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}

$tp = new TransactionPro('Gnu licenses', 12);

var_dump($tp->amount);
var_dump($tp->getDescription());

<?php

declare(strict_types=1);

class Transaction
{
    // public, private or protected
    private float $amount;
    private string $description = '';

    public function __construct(float $amount, string $description)
    {
        $this->amount = $amount;
        $this->description = $description;
    }

    public function addTax(float $rate): Transaction
    {
        $this->amount += $this->amount * $rate / 100;
        return $this;
    }

    public function applyDiscount(float $rate): Transaction
    {
        $this->amount -= $this->amount * $rate / 100;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    public function __destruct()
    {
        echo 'Destruct ' . $this->description . "\n";
    }
}

$transaction = new Transaction(15, 'Transaction 1');

var_dump($transaction);

$transaction->addTax(21)->applyDiscount(10);

var_dump($transaction->getAmount());

$amount = (new Transaction(234, 'Transaction 2'))
    ->addTax(21)
    ->applyDiscount(10)
    ->getAmount();

var_dump($amount);

$arr = [1,2,3];
$obj = (object)$arr;
var_dump($obj->{1}); // 2

$str = '{"a":1,"b":2,"c":3}';
$arr = json_decode($str);
var_dump($arr->c); // 3

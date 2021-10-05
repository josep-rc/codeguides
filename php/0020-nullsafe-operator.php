<?php

declare(strict_types=1);

class Customer
{
    public ?PaymentProfile $paymentProfile = null;
}

class PaymentProfile
{
    public int $id;

    public function __construct()
    {
        $this->id = rand();
    }
}

class TransactionHero
{
    public ?Customer $customer = null;

    public function __construct(
        private float $amount,
        private string $description
    )
    {
    }
}

$transaction = new TransactionHero(5, 'test');

// echo $transaction->customer->paymentProfile->id; // warning

echo $transaction->customer->paymentProfile->id ?? 'foo'; // foo

echo $transaction->customer?->paymentProfile?->id;

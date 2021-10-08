<?php

class PaymentStatus
{
    public const PAID = 'paid';
    public const PENDING = 'pending';
    public const DECLINED = 'declined';

    public const ALL_STATUSES = [
        self::PAID => 'Paid',
        self::PENDING => 'Pending',
        self::DECLINED => 'Declined'
    ];
}

class Payment
{
    private string $status;

    public function __construct()
    {
        $this->setStatus(PaymentStatus::PENDING);
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        if (!isset(PaymentStatus::ALL_STATUSES[$status])) {
            throw new InvalidArgumentException('Invalid status');
        }
        $this->status = $status;
        return $this;
    }
}

$payment = new Payment();

// Constant access
var_dump(PaymentStatus::DECLINED);
var_dump($payment->getStatus());

$payment->setStatus(PaymentStatus::PAID);

// Obtain full qualified class name
var_dump($payment::class);
var_dump(Payment::class);


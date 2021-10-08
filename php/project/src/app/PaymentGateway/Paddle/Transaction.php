<?php

namespace App\PaymentGateway\Paddle;

class Transaction
{
    public const STATUS_PAID = 'paid';
    public const STATUS_PENDING = 'pending';
    public const STATUS_DECLINED = 'declined';

    public function __construct()
    {
        // Constant access
        var_dump(Transaction::STATUS_PENDING);
        var_dump(self::STATUS_PAID);
    }


}
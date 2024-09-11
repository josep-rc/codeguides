<?php

require __DIR__ . '/../vendor/autoload.php';

use App\PaymentGateway\Paddle\Transaction;

$transaction = new Transaction();

$id = new \Ramsey\Uuid\UuidFactory();

echo $id->uuid4();

var_dump($transaction);

// Constant access
var_dump(Transaction::STATUS_DECLINED);
var_dump($transaction::STATUS_PENDING);

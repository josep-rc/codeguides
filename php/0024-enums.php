<?php

namespace Enums;

enum Status {
    case Pending;
    case Paid;
    case Declined;
}

class Payment2
{
    public Status $status = Status::Pending;
}

$payment = new Payment2();

// Constant access
var_dump(Status::Declined);
var_dump($payment->status);

$payment->status = Status::Paid;

var_dump($payment->status);

// Obtain full qualified class name
var_dump($payment::class);
var_dump(Payment2::class);


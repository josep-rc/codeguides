<?php

namespace Statics;

class Transaction
{
    public static int $count = 0;

    public function __construct()
    {
        self::$count++; // counting instances
    }

    public static function getCount(): int
    {
        // $this is not available
        return self::$count;
    }
}

$transaction = new Transaction();

var_dump($transaction::$count);     // 1
var_dump(Transaction::$count);      // 1
var_dump(Transaction::getCount());  // 1





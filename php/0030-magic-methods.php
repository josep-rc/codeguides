<?php

declare(strict_types=1);

namespace Magic;

// https://www.php.net/manual/en/language.oop5.magic.php
// https://youtu.be/nCxnzj83poQ

class Invoice
{
    private string $accountNumber = '123456789';
    public function __toString(): string{
        return 'Invoice';
    }

    public function __invoke()
    {
        var_dump('invoked');
    }

    public function __debugInfo(): ?array
    {
        // Overwrites var_dump output
        return [
            'accountNumber'=>'****' . substr($this->accountNumber, -4)
        ];
    }
}

$i = new Invoice();
echo $i . PHP_EOL; // Invoice
$i(); // invoked
var_dump(is_callable($i)); // true
var_dump($i); // [accountNumber=>****6789]




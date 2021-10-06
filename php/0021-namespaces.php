<?php

declare(strict_types=1);

namespace Course;

class Transaction
{

}
// use Paypal\Transaction; (to refer outside this namespace )
// use Stripe\Transaction as StripeTransaction; (alias)
// use User\{Payment, Address}; (combine imports)
var_dump(new Transaction()); // Course namespace
var_dump(new \Course\Transaction()); // Course namespace
var_dump(new \Transaction(12, 'hello')); // global namespace


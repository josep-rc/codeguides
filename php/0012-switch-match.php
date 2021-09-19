<?php

$status = 'paid';

switch ($status) {
    case 'paid':
        echo 'paid';
        break;
    case 'declined':
    case 'rejected':
        echo 'declined';
        break;
    case 'pending':
        echo 'pending';
        break;
    default:
        echo 'Unknown Payment Status';
}

echo match ($status) {
    'paid' => 'paid',
    'declined', 'rejected' => 'declined',
    'pending' => 'pending',
    default => 'Unknown Payment Status',
};


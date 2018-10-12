<?php

namespace App\Lessons\OpenClosed;

class CashPaymentMethod implements PaymentMethodInterface
{
    public function acceptPayment($receipt)
    {
        // accept the cash.
    }
}
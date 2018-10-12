<?php

namespace App;

class CashPaymentMethod implements PaymentMethodInterface
{
    public function acceptPayment($receipt)
    {
        // accept the cash.
    }
}
<?php

namespace App\Lessons\OpenClosed;

class Checkout
{
    public function begin(Receipt $receipt, PaymentMethodInterface $paymentMethod)
    {
        $paymentMethod->acceptPayment($receipt);
    }
}
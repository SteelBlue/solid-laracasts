<?php

namespace App\Lessons\OpenClosed;

interface PaymentMethodInterface
{
    public function acceptPayment($receipt);
}
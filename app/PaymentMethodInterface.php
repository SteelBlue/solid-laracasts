<?php

namespace App;

interface PaymentMethodInterface
{
    public function acceptPayment($receipt);
}
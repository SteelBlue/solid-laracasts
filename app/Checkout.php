<?php

namespace App;

class Checkout
{
    public function begin(Receipt $receipt)
    {
        $this->acceptCash($receipt);
    }

    public function acceptCash($receipt)
    {
        // accept the cash.
    }
}
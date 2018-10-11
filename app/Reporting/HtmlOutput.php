<?php

namespace App\Reporting;

use App\Reporting\SalesOutputInterface;

class HtmlOutput implements SalesOutputInterface
{
    public function output($sales)
    {
        return "<h1>Sales: $" . number_format($sales, 2) . "</h1>";
    }
}

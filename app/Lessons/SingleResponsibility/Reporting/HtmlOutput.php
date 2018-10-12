<?php

namespace App\Lessons\SingleResponsibility\Reporting;

class HtmlOutput implements SalesOutputInterface
{
    public function output($sales)
    {
        return "<h1>Sales: $" . number_format($sales, 2) . "</h1>";
    }
}

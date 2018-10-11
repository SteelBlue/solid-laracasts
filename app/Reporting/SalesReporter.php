<?php

namespace App\Reporting;

use Illuminate\Database\Eloquent\Model;
use Auth;
use DB;
use Exception;

class SalesReporter extends Model
{
    public function between($startDate, $endDate)
    {
        // get sales from db
        $sales = $this->queryDBForSalesBetween($startDate, $endDate);

        // return
        return $this->format($sales);
    }

    protected function queryDBForSalesBetween($startDate, $endDate)
    {
        return DB::table('sales')->whereBetween('created_at', [$startDate, $endDate])->sum('charge') / 100;
    }

    protected function format($sales)
    {
        return "<h1>Sales: $sales";
    }
}

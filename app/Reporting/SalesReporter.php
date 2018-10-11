<?php

namespace App\Reporting;

use Illuminate\Database\Eloquent\Model;
use App\Repositories\SalesRepository;

class SalesReporter extends Model
{
    private $repo;

    public function __construct(SalesRepository $repo)
    {
        $this->repo = $repo;
    }

    public function between($startDate, $endDate)
    {
        // get sales from db
        $sales = $this->repo->between($startDate, $endDate);

        // return
        return $this->format($sales);
    }

    protected function format($sales)
    {
        return "<h1>Sales: $" . number_format($sales, 2) . "</h1>";
    }
}

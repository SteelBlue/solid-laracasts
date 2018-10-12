<?php

namespace App\Lessons\SingleResponsibility\Reporting;

use Illuminate\Database\Eloquent\Model;
use App\Lessons\SingleResponsibility\Repositories\SalesRepository;

class SalesReporter extends Model
{
    private $repo;

    public function __construct(SalesRepository $repo)
    {
        $this->repo = $repo;
    }

    public function between($startDate, $endDate, SalesOutputInterface $formatter)
    {
        // get sales from db
        $sales = $this->repo->between($startDate, $endDate);

        return $formatter->output($sales);
    }
}

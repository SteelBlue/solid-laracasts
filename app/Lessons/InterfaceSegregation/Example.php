<?php

namespace App\Lessons\InterfaceSegregation;

/**
 * Imagine we are in the world of Star Trek.
 */

class Worker
{
    public function work()
    {
        //
    }

    public function sleep()
    {
        //
    }
}

class Captain
{
    public function manage(Worker $worker)
    {
        $worker->work();
        $worker->sleep();
    }
}
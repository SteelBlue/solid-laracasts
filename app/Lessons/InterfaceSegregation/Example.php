<?php

namespace App\Lessons\InterfaceSegregation;

/**
 * Imagine we are in the world of Star Trek.
 */

interface WorkerInterface
{
    public function work();

    public function sleep();
}

class HumanWorker implements WorkerInterface
{
    public function work()
    {
        // TODO: Implement work() method.
    }

    public function sleep()
    {
        // TODO: Implement sleep() method.
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
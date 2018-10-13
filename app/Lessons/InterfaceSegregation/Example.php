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
        return 'human working.';
    }

    public function sleep()
    {
        return 'human sleeping';
    }
}

class AndroidWorker implements WorkerInterface
{

    public function work()
    {
        return 'android working.';
    }

    public function sleep()
    {
        return null;
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
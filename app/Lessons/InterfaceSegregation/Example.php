<?php

namespace App\Lessons\InterfaceSegregation;

/**
 * Imagine we are in the world of Star Trek.
 */

interface WorkableInterface
{
    public function work();
}

interface SleepableInterface
{
    public function sleep();
}

class HumanWorker implements WorkableInterface, SleepableInterface
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

class AndroidWorker implements WorkableInterface
{

    public function work()
    {
        return 'android working.';
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
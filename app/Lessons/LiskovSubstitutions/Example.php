<?php

namespace App\Lessons\LiskovSubstitutions;

class A
{
    public function fire() {}
}

class B extends A
{
    public function fire() {}
}

function doSomething(A $obj)
{
    // do something with it.
}
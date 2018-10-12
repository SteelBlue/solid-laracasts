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

function foo(LessonRepositoryInterface $lesson)
{
    $lesson = $lesson->getAll();

    if (is_a($lesson, 'DbLessonRepository'))
    {
        // do something with the DbLessonRepository collection.
    }

    if ($lesson instanceof 'FileLessonRepository')
    {
        // do something with FileLessonRepository array.
    }
}
<?php

namespace App\Lessons\LiskovSubstitutions;

class DbLessonRepository implements LessonRepositoryInterface
{
    public function getAll()
    {
        return Lesson::all(); // violates the LSP
    }
}
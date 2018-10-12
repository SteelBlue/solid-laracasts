<?php

namespace App\Lessons\LiskovSubstitutions;

class FileLessonRepository implements LessonRepositoryInterface
{

    public function getAll()
    {
        // return through filesystem.
        return [];
    }
}
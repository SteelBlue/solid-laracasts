<?php

namespace App\Lessons\LiskovSubstitutions;

interface LessonRepositoryInterface
{
    /**
     * Fetch all records.
     *
     * @return array
     */
    public function getAll();
}
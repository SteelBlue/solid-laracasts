<?php

namespace App\Lessons\LiskovSubstitutions;

use Exception;

class AviVideoPlayer extends VideoPlayer
{
    public function play($file)
    {
        if (pathinfo($file, PATHINFO_EXTENSION) != 'avi')
        {
            throw new Exception;
        }
    }
}
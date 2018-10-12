<?php

namespace App;

class AreaCalculator
{
    public function calculate($shapes)
    {
        foreach($shapes as $shape)
        {
            $area[] = $shape->area();
        }

        return array_sum($area);
    }
}

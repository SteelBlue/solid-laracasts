<?php

namespace App;

class AreaCalculator
{
    public function calculate($shapes)
    {
        foreach($shapes as $shape)
        {
            if (is_a($shape, 'Square'))
            {
                $area[] = $shape->width * $shape->height;
            }
            else
            {
                $area[] = $shape->radius * $shape->radius * pi();
            }
        }

        return array_sum($area);
    }
}

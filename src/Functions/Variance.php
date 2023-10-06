<?php

namespace Simba\Statistiques\Functions;

class Variance{
    public static function calculate(array $numbers) : float{
        $count = count($numbers);
        $mu = array_sum($numbers)/$count;
        foreach($numbers as $num){
            $sub=$num-$mu;
            $step2[]=pow($sub, 2);
        }
        $sqsum = array_sum($step2);
        $variance = ($sqsum / ($count-1));
        return round($variance, 2);
    }
}
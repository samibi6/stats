<?php

namespace Simba\Statistiques\Functions;

class StandardDeviation{
    public static function calculate(array $numbers){
        $count = count($numbers);
        $mu = array_sum($numbers)/$count;
        foreach($numbers as $num){
            $sub=$num-$mu;
            $step2[]=pow($sub, 2);
        }
        $sqsum = array_sum($step2);
        $sqdivn = ($sqsum / ($count-1));
        $SD = sqrt($sqdivn);
        return round($SD, 2);
    }
}
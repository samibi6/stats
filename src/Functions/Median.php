<?php

namespace Simba\Statistiques\Functions;

class Median{
    public static function calculate(array $numbers) : float{
        sort($numbers);
        $count = count($numbers);
        if($count % 2 === 0){
            $mid = ($count/2)-1;
            $mediane = ($numbers[$mid] + $numbers[$mid+1])/2;
        }else{
            $mid = floor(($count/2));
            $mediane = $numbers[$mid];
        }
        return $mediane;
    }
}
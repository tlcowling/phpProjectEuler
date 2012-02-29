<?php

class TriangleGenerator{
    public static function get_triangle_number($index){
        $numbers = range(1,$index);
        $sum = array_sum($numbers);
        return $sum;
    }

    public static function getTriangleNumbersUpTo($index){
        $numbers = array();

        for($i=1; $i<=$index; $i++){
            array_push($numbers,TriangleGenerator::get_triangle_number($i));
        }

        return $numbers;
    }
}


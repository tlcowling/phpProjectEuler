<?php

$sum = 0;
$sum_of_squares = 0;

foreach (range(1, 100) as $number) {
    $sum += $number;
    $sum_of_squares += pow($number,2.);
}

$square_of_sums = pow($sum,2);

echo $square_of_sums- $sum_of_squares;


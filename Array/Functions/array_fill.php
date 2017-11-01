<?php

// array_fill — Fill an array with values

// array array_fill ( int $start_index , int $num , mixed $value )

// Fills an array with num entries of the value of the value parameter, keys starting at the start_index parameter.

array_fill(5, 6, 'banana');
/*
 Array
(
    [5]  => banana
    [6]  => banana
    [7]  => banana
    [8]  => banana
    [9]  => banana
    [10] => banana
)
*/
array_fill(-2, 4, 'pear');
/*
 Array
(
    [-2] => pear
    [0] => pear
    [1] => pear
    [2] => pear
)
*/
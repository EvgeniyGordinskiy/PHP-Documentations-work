<?php

// array_map — Applies the callback to the elements of the given arrays

// array array_map ( callable $callback , array $array1 [, array $... ] )

// array_map() returns an array containing all the elements of array1 after applying the callback function to each one. The number of parameters that the callback function accepts should match the number of arrays passed to the array_map()

function cube($n)
{
	return($n * $n * $n);
}

$a = array(1, 2, 3, 4, 5);
$b = array_map("cube", $a);
/*Array
(
    [0] => 1
    [1] => 8
    [2] => 27
    [3] => 64
    [4] => 125
)*/

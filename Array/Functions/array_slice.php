<?php

// array_slice — Extract a slice of the array

// array array_slice ( array $array , int $offset [, int $length = NULL [, bool $preserve_keys = false ]] )

// array_slice() returns the sequence of elements from the array array as specified by the offset and length parameters.

$input = array("a", "b", "c", "d", "e");

$output = array_slice($input, 2);      // [c,d,e]
$output = array_slice($input, -2, 1);  // [d]
$output = array_slice($input, 0, 3);   // [a, b, c]

print_r(array_slice($input, 2, -1));
/*
Array
(
    [0] => c
    [1] => d
)
*/
print_r(array_slice($input, 2, -1, true));
/*
Array
(
    [2] => c
    [3] => d
)
*/
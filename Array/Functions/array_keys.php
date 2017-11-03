<?php

// array_keys — Return all the keys or a subset of the keys of an array

// array array_keys ( array $array [, mixed $search_value = null [, bool $strict = false ]] )

// array_keys() returns the keys, numeric and string, from the array.

// If the optional search_value is specified, then only the keys for that value are returned. Otherwise, all the keys from the array are returned.

$array = array(0 => 100, "color" => "red");
array_keys($array);
/*
 Array
(
    [0] => 0
    [1] => color
)
*/

$array = array("blue", "red", "green", "blue", "blue");
array_keys($array, "blue");
/*(
    [0] => 0
    [1] => 3
    [2] => 4
)*/

$array = array("color" => array("blue", "red", "green"),
	"size"  => array("small", "medium", "large"));
array_keys($array);
/*Array
(
    [0] => color
    [1] => size
)*/
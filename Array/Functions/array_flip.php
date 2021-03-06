<?php

// array_flip — Exchanges all keys with their associated values in an array

// array array_flip ( array $array )

// array_flip() returns an array in flip order, i.e. keys from array become values and values from array become keys.

// Note that the values of array need to be valid keys, i.e. they need to be either integer or string. A warning will be emitted if a value has the wrong type, and the key/value pair in question will not be included in the result.

// If a value has several occurrences, the latest key will be used as its value, and all others will be lost.

array_flip(["oranges", "apples", "pears"]);
/*
 Array
(
    [oranges] => 0
    [apples] => 1
    [pears] => 2
)
*/

array_flip(["a" => 1, "b" => 1, "c" => 2]);
/*
 Array
(
    [1] => b
    [2] => c
)
*/
<?php

// array_replace — Replaces elements from passed arrays into the first array


// array array_replace ( array $array1 , array $array2 [, array $... ] )

$base = array("orange", "banana", "apple", "raspberry");
$replacements = array(0 => "pineapple", 4 => "cherry");
$replacements2 = array(0 => "grape");

$basket = array_replace($base, $replacements, $replacements2); 
/*
Array
(
    [0] => grape
    [1] => banana
    [2] => apple
    [3] => raspberry
    [4] => cherry
)
*/

<?php

// array_push — Push one or more elements onto the end of array

// int array_push ( array &$array , mixed $value1 [, mixed $... ] )

// array_push() treats array as a stack, and pushes the passed variables onto the end of array. The length of array increases by the number of variables pushed. Has the same effect as:

$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry");
/*
 Array
(
    [0] => orange
    [1] => banana
    [2] => apple
    [3] => raspberry
)
*/

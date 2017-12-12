<?php

// array_shift — Shift an element off the beginning of array

// mixed array_shift ( array &$array )

$stack = array("orange", "banana", "apple", "raspberry");
$fruit = array_shift($stack);
/*
Array
(
    [0] => banana
    [1] => apple
    [2] => raspberry
)
*/
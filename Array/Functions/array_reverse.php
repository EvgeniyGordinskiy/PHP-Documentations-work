<?php

// array_reverse — Return an array with elements in reverse order

// array array_reverse ( array $array [, bool $preserve_keys = false ] )

// Takes an input array and returns a new array with the order of the elements reversed.

$input  = array("php", 4.0, array("green", "red"));

$preserved = array_reverse($input, true);

/*

Array
(
    [2] => Array
        (
            [0] => green
            [1] => red
        )

    [1] => 4
    [0] => php
)

*/
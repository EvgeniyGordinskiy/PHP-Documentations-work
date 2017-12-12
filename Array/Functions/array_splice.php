<?php

// array_splice — Remove a portion of the array and replace it with something else

// array array_splice ( array &$input , int $offset [, int $length = count($input) [, mixed $replacement = array() ]] )

// Removes the elements designated by offset and length from the input array, and replaces them with the elements of the replacement array, if supplied.

$input = array("red", "green", "blue", "yellow");
array_splice($input, 2);
// $input is now array("red", "green")

$input = array("red", "green", "blue", "yellow");
array_splice($input, 1, -1);
// $input is now array("red", "yellow")

$input = array("red", "green", "blue", "yellow");
array_splice($input, 1, count($input), "orange");
// $input is now array("red", "orange")

$input = array("red", "green", "blue", "yellow");
array_splice($input, -1, 1, array("black", "maroon"));
// $input is now array("red", "green",
//          "blue", "black", "maroon")

$input = array("red", "green", "blue", "yellow");
array_splice($input, 3, 0, "purple");
// $input is now array("red", "green",
//          "blue", "purple", "yellow");	

// append two elements to $input
array_push($input, $x, $y);
array_splice($input, count($input), 0, array($x, $y));

// remove the last element of $input
array_pop($input);
array_splice($input, -1);

// remove the first element of $input
array_shift($input);
array_splice($input, 0, 1);

// insert an element at the start of $input
array_unshift($input, $x, $y);
array_splice($input, 0, 0, array($x, $y));

// replace the value in $input at index $x
$input[$x] = $y; // for arrays where key equals offset
array_splice($input, $x, 1, $y);
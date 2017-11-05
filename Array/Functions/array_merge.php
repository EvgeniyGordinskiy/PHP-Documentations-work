<?php

// array_merge — Merge one or more arrays

//  array array_merge ( array $array1 [, array $... ] )

/*
  Merges the elements of one or more arrays together so that the values of one are appended to the end of the previous one. It returns the resulting array.

If the input arrays have the same string keys, then the later value for that key will overwrite the previous one. If, however, the arrays contain numeric keys, the later value will not overwrite the original value, but will be appended.

Values in the input array with numeric keys will be renumbered with incrementing keys starting from zero in the result array.
 */

$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
array_merge($array1, $array2);
/*
 array (size=7)
  'color' => string 'green' (length=5)
  0 => int 2
  1 => int 4
  2 => string 'a' (length=1)
  3 => string 'b' (length=1)
  'shape' => string 'trapezoid' (length=9)
  4 => int 4
 */

$data = [[1, 2], [3], [4, 5]];
array_merge(... $data); // [1, 2, 3, 4, 5];

$data = [[1, 2], [3], [4, 5], null];
array_merge(... $data); // warning + null returned
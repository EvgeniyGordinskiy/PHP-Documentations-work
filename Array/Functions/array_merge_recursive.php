<?php

// array_merge_recursive — Merge two or more arrays recursively

//  array array_merge_recursive ( array $array1 [, array $... ] )

/*
 *  array_merge_recursive() merges the elements of one or more arrays together so that the values of one are appended to the end of the previous one. It returns the resulting array.

If the input arrays have the same string keys, then the values for these keys are merged together into an array,
 and this is done recursively, so that if one of the values is an array itself,
the function will merge it with a corresponding entry in another array too. If,
however, the arrays have the same numeric key, the later value will not overwrite the original value,
 but will be appended.
 */

$ar1 = [5, "color" => array("favorite" => "red")];
$ar2 = [10, "color" => array("favorite" => "green", "blue")];
array_merge_recursive($ar1, $ar2);
/*
 [
   0 => int 5
  'color' =>
   [
      'favorite' =>
        [
          0 => string 'red' (length=3)
          1 => string 'green' (length=5)
        ]
      0 => string 'blue' (length=4)
   ]
  1 => int 10
]
 */

<?php

// array_udiff_assoc — Computes the difference of arrays with additional index check, compares data by a callback function

// array array_udiff_assoc ( array $array1 , array $array2 [, array $... ], callable $value_compare_func )

$a = [
  "a" => "green",
  "b" => "brown",
  "c" => "blue",
  0 => "red",
];

$b = [
  "a" => "GREEN",
  "B" => "brown",
  0 => "yellow",
  1 => "red",
]

array_udiff_assoc($a, $b, 'strncasecmp'); 
/*
[
  'b' => 'brown',
  'c' => 'blue',
  0 => 'red',
]
*/

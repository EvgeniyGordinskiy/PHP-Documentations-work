<?php

// array_udiff_uassoc — Computes the difference of arrays with additional index check, compares data and indexes by a callback function

// array array_udiff_uassoc ( array $array1 , array $array2 [, array $... ], callable $value_compare_func , callable $key_compare_func )

// Computes the difference of arrays with additional index check, compares data and indexes by a callback function.

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

array_udiff_assoc($a, $b, 'strncasecmp', 'strncasecmp'); 
/*
[
  'c' => 'blue',
  0 => 'red',
]
*/
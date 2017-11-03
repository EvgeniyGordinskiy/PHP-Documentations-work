<?php

// array_intersect_ukey — Computes the intersection of arrays using a callback function on the keys for comparison

// array array_intersect_ukey ( array $array1 , array $array2 [, array $... ], callable $key_compare_func )

// array_intersect_ukey() returns an array containing all the values of array1 which have matching keys that are present in all the arguments.

array_intersect_ukey([ 'admin', 'guest', 'auth'], ['auth'], function($a, $b) {
	return $a<=>$b;
});/*
array:1 [▼
  1 => "admin"
]
 */
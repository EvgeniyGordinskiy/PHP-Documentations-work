<?php

// array_diff_ukey — Computes the difference of arrays using a callback function on the keys for comparison

// array array_diff_ukey ( array $array1 , array $array2 [, array $... ], callable $key_compare_func )

// Compares the keys from array1 against the keys from array2 and returns the difference. This function is like array_diff() except the comparison is done on the keys instead of the values.

// Unlike array_diff_key() a user supplied callback function is used for the indices comparison, not internal function.

array_diff_ukey([ 'admin', 'guest', 'auth'], ['auth'], function($a, $b) {
	return $a<=>$b;
});
/*
array:2 [▼
  1 => "guest"
  2 => "auth"
]
 */
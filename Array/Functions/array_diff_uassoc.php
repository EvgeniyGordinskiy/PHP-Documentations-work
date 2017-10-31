<?php

// array_diff_uassoc — Computes the difference of arrays with additional index check which is performed by a user supplied callback function

// array array_diff_uassoc ( array $array1 , array $array2 [, array $... ], callable $key_compare_func )

// Compares array1 against array2 and returns the difference. Unlike array_diff() the array keys are used in the comparison

// Unlike array_diff_assoc() a user supplied callback function is used for the indices comparison, not internal function.

array_diff_uassoc(['auth', 'admin', 'guest'], ['auth'], function($a, $b) {
	return $a<=>$b;
});
/*
array:2 [▼
1 => "admin"
  2 => "guest"
]
*/
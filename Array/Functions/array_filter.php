<?php

// array_filter — Filters elements of an array using a callback function

// array array_filter ( array $array [, callable $callback [, int $flag = 0 ]] )

// Iterates over each value in the array passing them to the callback function. If the callback function returns true, the current value from array is returned into the result array. Array keys are preserved.

array_filter(['one', 'two', 'two', 'three', 'four'], function ($value, $key) {
	if ($value === 'two' && $key === 2) {
		return true;
	}
	return false;
}, ARRAY_FILTER_USE_BOTH);

/*
 array:1 [▼
  2 => "two"
]
*/
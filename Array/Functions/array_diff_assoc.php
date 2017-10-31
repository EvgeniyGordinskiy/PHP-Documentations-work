<?php

// array_diff_assoc — Computes the difference of arrays with additional index check

// array array_diff_assoc ( array $array1 , array $array2 [, array $... ] )

// Compares array1 against array2 and returns the difference. Unlike array_diff() the array keys are also used in the comparison.

array_diff_assoc(['auth', 'admin', 'guest'], ['auth']);
/*
array:2 [▼
1 => "admin"
  2 => "guest"
]
*/
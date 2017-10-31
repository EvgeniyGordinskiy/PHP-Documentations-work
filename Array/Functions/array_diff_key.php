<?php

// array_diff_key — Computes the difference of arrays using keys for comparison

// array array_diff_key ( array $array1 , array $array2 [, array $... ] )

// Compares the keys from array1 against the keys from array2 and returns the difference. This function is like array_diff() except the comparison is done on the keys instead of the values.

array_diff_key([ 'admin', 'guest', 'auth'], ['auth']);
/*
array:2 [▼
  1 => "guest"
  2 => "auth"
]
 */
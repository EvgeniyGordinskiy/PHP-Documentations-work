<?php

// array_intersect_assoc — Computes the intersection of arrays with additional index check

// array array_intersect_assoc ( array $array1 , array $array2 [, array $... ] )

// array_intersect_assoc() returns an array containing all the values of array1 that are present in all the arguments. Note that the keys are also used in the comparison unlike in array_intersect().

array_diff_assoc(['auth', 'admin', 'guest'], ['auth']);

/*
 array:1 [▼
  0 => "auth"
]
  */
<?php

// array_intersect — Computes the intersection of arrays

// array array_intersect ( array $array1 , array $array2 [, array $... ] )

// array_intersect() returns an array containing all the values of array1 that are present in all the arguments. Note that keys are preserved.

array_intersect([ 'admin', 'guest', 'auth'], ['auth']);
/*
array:1 [▼
  2 => "auth"
]
 */
<?php

// array_diff — Computes the difference of arrays

// array array_diff ( array $array1 , array $array2 [, array $... ] )

// Compares array1 against one or more other arrays and returns the values in array1 that are not present in any of the other arrays.

array_diff([ 'admin', 'guest', 'auth'], ['auth'], ['herd']);
/*
 array:2 [▼
  0 => "admin"
  1 => "guest"
]
 */
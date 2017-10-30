<?php

// array_count_values — Counts all the values of an array

// array array_count_values ( array $array )

// array_count_values() returns an array using the values of array as keys and their frequency in array as values.

$things = ['apple', 'apple', 'banana', 'tree', 'tree', 'tree'];
$values = array_count_values($things);

/*
  Array
 (
     [apple] => 2
     [banana] => 1
     [tree] => 3
 )
 */
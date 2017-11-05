<?php

// array_pad — Pad array to the specified length with a value

//  array array_pad ( array $array , int $size , mixed $value )

/*
  array_pad() returns a copy of the array padded to size specified by size with value value.
 If size is positive then the array is padded on the right, if it's negative then on the left. If the absolute value of size is less than or equal to the length of the array then no padding takes place.
 It is possible to add at most 1048576 elements at a time.
 */

$input = array(12, 10, 9);

array_pad($input, 5, 0); // array(12, 10, 9, 0, 0)

array_pad($input, -7, -1);//array(-1, -1, -1, -1, 12, 10, 9)

array_pad($input, 2, "noop"); // not padded

$a = array('size'=>'large', 'number'=>20, 'color'=>'red');

array_pad($a, 5, 'foo');
/*
Array
(
    [size] => large
    [number] => 20
    [color] => red
    [0] => foo
    [1] => foo
) 
*/

$a = array('2010'=>'large', '1995'=>20, '2000'=>'red');
array_pad($a, 5, 'foo');
/*
array (size=5)
  0 => string 'large' (length=5)
  1 => int 20
  2 => string 'red' (length=3)
  3 => string 'foo' (length=3)
  4 => string 'foo' (length=3)
*/
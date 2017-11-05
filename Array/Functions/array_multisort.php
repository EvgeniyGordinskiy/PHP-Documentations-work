<?php

// array_multisort — Sort multiple or multi-dimensional arrays

// bool array_multisort ( array &$array1 [, mixed $array1_sort_order = SORT_ASC [, mixed $array1_sort_flags = SORT_REGULAR [, mixed $... ]]] )

/*
   array_multisort() can be used to sort several arrays at once, or a multi-dimensional array by one or more dimensions.

    Associative (string) keys will be maintained, but numeric keys will be re-indexed.
*/

$ar1 = array(10, 100, 100, 0);
$ar2 = array(1, 3, 2, 4);
array_multisort($ar2, $ar1);
/*
array (size=4)
  0 => int 10
  1 => int 100
  2 => int 100
  3 => int 0

/var/www/Through-PHP/index.php:6:
array (size=4)
  0 => int 1
  1 => int 2
  2 => int 3
  3 => int 4    
*/
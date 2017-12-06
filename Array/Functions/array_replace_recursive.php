<?php

// array_replace_recursive — Replaces elements from passed arrays into the first array recursively

// array array_replace_recursive ( array $array1 , array $array2 [, array $... ] )

/*
    array_replace_recursive() replaces the values of array1 with the same values from all the following arrays.
  If a key from the first array exists in the second array, its value will be replaced by the value from the second array. If the key exists in the second array, and not the first, it will be created in the first array. If a key only exists in the first array, it will be left as is.
  If several arrays are passed for replacement, they will be processed in order, the later array overwriting the previous values.
 */
$base = array('citrus' => array( "orange") , 'berries' => array("blackberry", "raspberry"), );
$replacements = array('citrus' => array('pineapple'), 'berries' => array('blueberry'));

$basket = array_replace_recursive($base, $replacements);
print_r($basket);
/*
array:2 [▼
  "citrus" => array:1 [▼
    0 => "pineapple"
  ]
  "berries" => array:2 [▼
    0 => "blueberry"
    1 => "raspberry"
  ]
]
*/
<?php

// array_fill_keys — Fill an array with values, specifying keys

// array array_fill_keys ( array $keys , mixed $value )

// Fills an array with the value of the value parameter, using the values of the keys array as keys.

array_fill_keys(['one', 'two'], ['banana', 'orange']);
/*3
array:2 [▼
  "one" => array:2 [▼
    0 => "banana"
    1 => "orange"
  ]
  "two" => array:2 [▼
    0 => "banana"
    1 => "orange"
  ]
]
*/
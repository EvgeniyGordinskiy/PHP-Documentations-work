<?php

// array_search — Searches the array for a given value and returns the first corresponding key if successful

// mixed array_search ( mixed $needle , array $haystack [, bool $strict = false ] )

$array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');

$key = array_search('green', $array); // $key = 2;

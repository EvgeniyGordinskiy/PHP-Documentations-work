<?php

// mixed str_replace ( mixed $search , mixed $replace , mixed $subject [, int &$count ] )

// This function returns a string or an array with all occurrences of search in subject replaced with the given replace value.

$str = "Just a string with many words";

str_replace(['just', 'string'], 'full', $str,$count); //  'Just a full with many words'

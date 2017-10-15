<?php

// mixed str_ireplace ( mixed $search , mixed $replace , mixed $subject [, int &$count ] )

// This function returns a string or an array with all occurrences of search in subject (ignoring case) replaced with the given replace value. If you don't need fancy replacing rules, you should generally use this function instead of preg_replace() with the i modifier.
$str = "Just a string with many words";

str_ireplace('just', 'full', $str,$count); // 'full a string with many words'

str_ireplace(['just', 'a'], 'full', $str,$count); //  'full full string with mny words'

str_ireplace(['just', 'a'], ['full',''], $str,$count); //  'full  string with mny words'. $count === 3 !!

$str = [" Just a string with many words", "Another just a string with many words"];

str_ireplace('just', 'full', $str,$count);
/*
 array (size=2)
  0 => string ' full a string with many words' (length=28)
  1 => string 'Another full a string with many words' (length=34)

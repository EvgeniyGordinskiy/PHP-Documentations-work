<?php

// strpos — Find the position of the first occurrence of a substring in a string

// mixed strpos ( string $haystack , mixed $needle [, int $offset = 0 ] )

// Find the numeric position of the first occurrence of needle in the haystack string.

$mystring = 'abc';
$findme   = 'b';
strpos($mystring, $findme); // 1;
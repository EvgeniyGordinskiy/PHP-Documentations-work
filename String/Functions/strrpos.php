<?php

// strrpos — Find the position of the last occurrence of a substring in a string

// int strrpos ( string $haystack , string $needle [, int $offset = 0 ] )

// Find the numeric position of the last occurrence of needle in the haystack string.

	
$haystack = 'ababcabcd';
$needle   = 'abc';
strripos($haystack, $needle); // 5
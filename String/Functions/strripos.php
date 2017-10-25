<?php

// strripos — Find the position of the last occurrence of a case-insensitive substring in a string

// int strripos ( string $haystack , string $needle [, int $offset = 0 ] )


// Find the numeric position of the last occurrence of needle in the haystack string.

	
$haystack = 'ababcabcd';
$needle   = 'aBc';
strripos($haystack, $needle); // 5
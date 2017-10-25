<?php

// substr_count — Count the number of substring occurrences

// int substr_count ( string $haystack , string $needle [, int $offset = 0 [, int $length ]] )

// substr_count() returns the number of times the needle substring occurs in the haystack string. Please note that needle is case sensitive.

// very fast work

$text = 'This is a test';
strlen($text); // 14

substr_count($text, 'is'); // 2

// the string is reduced to 's is a test', so it prints 1
substr_count($text, 'is', 3);

// the text is reduced to 's i', so it prints 0
substr_count($text, 'is', 3, 3);

// generates a warning because 5+10 > 14
substr_count($text, 'is', 5, 10);
<?php

// ucwords — Uppercase the first character of each word in a string

// string ucwords ( string $str [, string $delimiters = " \t\r\n\f\v" ] )

// Returns a string with the first character of each word in str capitalized, if that character is alphabetic.

$foo = 'hello world!';
$foo = ucwords($foo);             // Hello World!

$bar = 'HELLO WORLD!';
$bar = ucwords($bar);             // HELLO WORLD!
$bar = ucwords(strtolower($bar)); // Hello World!

$foo = 'hello|world!';
$bar = ucwords($foo);             // Hello|world!

$baz = ucwords($foo, "|");        // Hello|World!
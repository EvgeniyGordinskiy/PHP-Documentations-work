<?php

// ucfirst — Make a string's first character uppercase

// string ucfirst ( string $str )

// Returns a string with the first character of str capitalized, if that character is alphabetic.

$foo = 'hello world!';
$foo = ucfirst($foo);             // Hello world!

$bar = 'HELLO WORLD!';
$bar = ucfirst($bar);             // HELLO WORLD!
$bar = ucfirst(strtolower($bar)); // Hello world!
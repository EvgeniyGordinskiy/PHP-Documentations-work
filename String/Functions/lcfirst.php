<?php

// string lcfirst ( string $str )

// Returns a string with the first character of str lowercased if that character is alphabetic.

$foo = 'HelloWorld';
$foo = lcfirst($foo);             // helloWorld

$bar = 'HELLO WORLD!';
$bar = lcfirst($bar);             // hELLO WORLD!
$bar = lcfirst(strtoupper($bar)); // hELLO WORLD!
<?php

// string ltrim ( string $str [, string $character_mask ] )

// Strip whitespace (or other characters) from the beginning of a string.

$string = "Hello world";
$character_mask = "Hello ";
ltrim($string, $character_mask); // 'world'

$binary = "\x0AExample string\x0A";

ltrim($binary, "\0..\31"); // 'Example string
//'
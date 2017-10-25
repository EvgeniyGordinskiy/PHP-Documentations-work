<?php

// trim — Strip whitespace (or other characters) from the beginning and end of a string

// string trim ( string $str [, string $character_mask = " \t\n\r\0\x0B" ] )

// This function returns a string with whitespace stripped from the beginning and end of str. 

$text   = "\t\tThese are a few words :) ...  ";
$binary = "\x09Example string\x0A";
$hello  = "Hello World";

trim($text, " \t."); // 'These are a few words :)'


trim($hello, "Hdle"); // 'o Wor'


trim($hello, 'HdWr'); // 'ello Worl'


// trim the ASCII control characters at the beginning and end of $binary
// (from 0 to 31 inclusive)
trim($binary, "\x00..\x1F"); // Example string'
<?php
$text   = "\t\tThese are a few words :) ...  ";
$binary = "\x09Example string\x0A";
$hello  = "Hello World";
var_dump($text, $binary, $hello);

print "\n";

$trimmed = trim($text);
var_dump($trimmed);

trim($text, " \t."); // 'These are a few words :)'


trim($hello, "Hdle"); // 'o Wor'


trim($hello, 'HdWr'); // 'ello Worl'


// trim the ASCII control characters at the beginning and end of $binary
// (from 0 to 31 inclusive)
trim($binary, "\x00..\x1F"); // Example string'



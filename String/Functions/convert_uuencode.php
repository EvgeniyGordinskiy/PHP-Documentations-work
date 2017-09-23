<?php

// string convert_uuencode ( string $data )
// Uuencode translates all strings (including binary's ones) into printable characters, making them safe for network transmissions. Uuencoded data is about 35% larger than the original.

$some_string = "test\ntext text\r\n";
$code = convert_uuencode($some_string); // '0=&5S=`IT97AT('1E>'0-"@``
//`
//' 

convert_uudecode($code); // 'test
//text text
//' 

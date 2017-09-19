<?php
$some_string = "test\ntext text\r\n";
$code = convert_uuencode($some_string);
var_dump(convert_uuencode($some_string));
var_dump(convert_uudecode($code));
<?php

// string rtrim ( string $str [, string $character_mask ] )

// This function returns a string with whitespace (or other characters) stripped from the end of str.

$str = "Hello,,,,,,pffffffffff";

rtrim($str, ', p f'); // 'Hello'
rtrim($str, ', p '); // 'Hello,,,,,,pfffffffff'

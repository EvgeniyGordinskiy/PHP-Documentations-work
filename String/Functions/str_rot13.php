<?php

// string str_rot13 ( string $str )

// Performs the ROT13 encoding on the str argument and returns the resulting string.

// The ROT13 encoding simply shifts every letter by 13 places in the alphabet while leaving non-alpha characters untouched. Encoding and decoding are done by the same function, passing an encoded string as argument will return the original version.

echo str_rot13('PHP 4.3.0'); // CUC 4.3.0

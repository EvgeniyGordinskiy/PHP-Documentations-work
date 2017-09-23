<?php

// string hex2bin ( string $data )
// Decodes a hexadecimally encoded binary string.
// ! Caution This function does NOT convert a hexadecimal number to a binary number. This can be done using the base_convert() function.

$hex = hex2bin("6578616d706c65206865782064617461"); // "example hex data"

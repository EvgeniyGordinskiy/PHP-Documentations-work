<?php

// string md5_file ( string $filename [, bool $raw_output = false ] )

// Calculates the MD5 hash of the file specified by the filename parameter using the » RSA Data Security, Inc. MD5
// Message-Digest Algorithm, and returns that hash. The hash is a 32-character hexadecimal number.

md5(file_get_contents(__FILE__)); // '47afb6df2ce2a6d18358a01915193644'
md5_file(__FILE__);  // '47afb6df2ce2a6d18358a01915193644'
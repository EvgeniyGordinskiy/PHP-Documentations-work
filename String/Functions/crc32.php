<?php

//int crc32 ( string $str )
//Generates the cyclic redundancy checksum polynomial of 32-bit lengths of the str. This is usually used to validate the integrity of data being transmitted.

	
$checksum = crc32("The quick brown fox jumped over the lazy dog.");
printf("%u\n", $checksum); // 2191738434
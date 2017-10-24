<?php

// int strncasecmp ( string $str1 , string $str2 , int $len )

// strncasecmp — Binary safe case-insensitive string comparison of the first n characters

// This function is similar to strcasecmp(), with the difference that you can specify the (upper limit of the) number of characters from each string to be used in the comparison.

$str1 = "rпр";
$str2 = "redeпр";

strncasecmp($str1, $str2 , 3); // 0
strncasecmp($str1, $str2, 6); // -3
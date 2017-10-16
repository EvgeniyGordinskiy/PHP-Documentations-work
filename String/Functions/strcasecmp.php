<?php

// int strcasecmp ( string $str1 , string $str2 )

// Binary safe case-insensitive string comparison.


$var1 = "Hello";
$var2 = "hello";
if (strcasecmp($var1, $var2) == 0) {
    echo '$var1 равно $var2 при сравнении без учета регистра';
}
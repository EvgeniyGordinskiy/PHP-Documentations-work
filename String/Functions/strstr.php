<?php

// string strstr ( string $haystack , mixed $needle [, bool $before_needle = false ] )

// Returns part of haystack string starting from and including the first occurrence of needle to the end of haystack.

// This function is case-sensitive. For case-insensitive searches, use stristr().

$email  = 'name@example.com';
$domain = strstr($email, '@');
echo $domain; // prints @example.com

$user = strstr($email, '@', true); // As of PHP 5.3.0
echo $user; // prints name
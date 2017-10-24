<?php

// strrchr — Find the last occurrence of a character in a string

// string strrchr ( string $haystack , mixed $needle )

// This function returns the portion of haystack which starts at the last occurrence of needle and goes until the end of haystack.

$path = '/www/public_html/index.html';
$filename = substr(strrchr($path, "/"), 1);
echo $filename; // "index.html"
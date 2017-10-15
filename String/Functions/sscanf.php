<?php

// mixed sscanf ( string $str , string $format [, mixed &$... ] )


// The function sscanf() is the input analog of printf(). sscanf() reads from the string str and interprets it according to the specified format, which is described in the documentation for sprintf().
// Any whitespace in the format string matches any whitespace in the input string. This means that even a tab \t in the format string can match a single space character in the input string.

list($serial) = sscanf("SN/2350001", "SN/%d");

$mandate = "January 01 2000";
list($month, $day, $year) = sscanf($mandate, "%s %d %d");
echo "Item $serial was manufactured on: $year-" . substr($month, 0, 3) . "-$day\n"; // Item 2350001 was manufactured on: 2000-Jan-1
<?php

// strpbrk — Search a string for any of a set of characters

// string strpbrk ( string $haystack , string $char_list )

// strpbrk() searches the haystack string for a char_list.

$text = 'This is a Simple text.';

// this echoes "is is a Simple text." because 'i' is matched first
echo strpbrk($text, 'mi');

// this echoes "Simple text." because chars are case sensitive
echo strpbrk($text, 'S');
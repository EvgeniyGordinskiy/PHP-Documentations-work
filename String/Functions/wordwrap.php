<?php

// wordwrap — Wraps a string to a given number of characters

// string wordwrap ( string $str [, int $width = 75 [, string $break = "\n" [, bool $cut = false ]]] )

// Wraps a string to a given number of characters using a string break character.

$text = "The quick brown fox jumped over the lazy dog.";
$newtext = wordwrap($text, 20, "<br />\n"); 
/*
The quick brown fox<br />
jumped over the lazy<br />
dog.
*/

$text = "A very long woooooooooooord.";
$newtext = wordwrap($text, 8, "\n", true);
/*
A very
long
wooooooo
ooooord.
*/

$text = "A very long woooooooooooooooooord. and something";
$newtext = wordwrap($text, 8, "\n", false);
/*
A very
long
woooooooooooooooooord.
and
something
*/

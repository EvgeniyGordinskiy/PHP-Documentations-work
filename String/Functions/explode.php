<?php

// array explode ( string $delimiter , string $string [, int $limit = PHP_INT_MAX ] )
// Returns an array of strings, each of which is a substring of string formed by splitting it on boundaries formed by the string delimiter.

$str = 'one|two|three|four';

explode('|', $str, 2);
/*
  * Array
(
    [0] => one
    [1] => two|three|four
)
  */

explode('|', $str, 2);
 /*
  * Array
(
    [0] => one
    [1] => two
    [2] => three
)
  */

// examples from php.net
function multiexplode ($delimiters,$string) {
    $ready = str_replace($delimiters, $delimiters[0], $string);
    $launch = explode($delimiters[0], $ready);
    return  $launch;
}

$text = "here is a sample: this text, and this will be exploded. this also | this one too :)";
$exploded = multiexplode(array(",",".","|",":"),$text);

print_r($exploded);

//And output will be like this:
// Array
// (
//    [0] => here is a sample
//    [1] =>  this text
//    [2] =>  and this will be exploded
//    [3] =>  this also
//    [4] =>  this one too
//    [5] => )
// )

array_map('trim',explode(",",$str)); // trim whitespaces from the exploded elements

explode(PHP_EOL, $text); // explode by a new line
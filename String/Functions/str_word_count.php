<?php

// mixed str_word_count ( string $string [, int $format = 0 [, string $charlist ]] )

// Counts the number of words inside string. If the optional format is not specified, then the return value will be an integer representing the number of words found. In the event the format is specified, the return value will be an array, content of which is dependent on the format. The possible value for the format and the resultant outputs are listed below.

//  For the purpose of this function, 'word' is defined as a locale dependent string containing alphabetic characters, which also may contain, but not start with "'" and "-" characters.

$str = "Hello fri3nd, you're
       looking          good today!";

str_word_count($str); //  7

str_word_count($str, 1);
/*
Array
(
    [0] => Hello
    [1] => fri
    [2] => nd
    [3] => you're
    [4] => looking
    [5] => good
    [6] => today
)
*/
str_word_count($str, 2);
/*
 Array
(
    [0] => Hello
    [6] => fri
    [10] => nd
    [14] => you're
    [29] => looking
    [46] => good
    [51] => today
)
*/

str_word_count($str, 1, 'àáãç3');
/*
 Array
(
    [0] => Hello
    [1] => fri3nd
    [2] => you're
    [3] => looking
    [4] => good
    [5] => today
)

 */

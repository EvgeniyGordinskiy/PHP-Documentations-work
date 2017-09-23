<?php
//string addslashes ( string $str )
get_magic_quotes_gpc(); // return current setting


addslashes ('"string>with@char{s}And[`"quo"`]\%^"'); // '\"string>with@char{s}And[`\"quo\"`]\\%^\"'

// string addcslashes ( string $str , string $charlist )
// Quote string with slashes in a C style
addcslashes('"string>with@char{s}And[`"quo"`]\%^"', "\0..\77!@\170..\377"); // '\"string\>ith\@char\{s\}And[`\"quo\"`]\%^\"'
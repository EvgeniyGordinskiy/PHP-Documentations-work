<?php

// void parse_str ( string $encoded_string [, array &$result ] )

// Parses encoded_string as if it were the query string passed via a URL and sets variables in the current scope (or in the array if result is provided).

$str = "first=value&arr[]=foo+bar&arr[]=baz";

parse_str($str, $output);
echo $output['first'];  // value
echo $output['arr'][0]; // foo bar
echo $output['arr'][1]; // baz
<?php

// string strtok ( string $str , string $token )

// strtok() splits a string (str) into smaller strings (tokens), with each token being delimited by any character from token. That is, if you have a string like "This is an example string" you could tokenize this string into its individual words by using the space character as the token.

// Note that only the first call to strtok uses the string argument. Every subsequent call to strtok only needs the token to use, as it keeps track of where it is in the current string. To start over, or to tokenize a new string you simply call strtok with the string argument again to initialize it. Note that you may put multiple tokens in the token parameter. The string will be tokenized when any one of the characters in the argument is found

$str = 'Hello to all of Ukraine';
strtok($str, ' ').' '.strtok(' ').' '.strtok(' '); // Hello to all

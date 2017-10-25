<?php

// substr — Return part of a string

// string substr ( string $string , int $start [, int $length ] )

// Returns the portion of string specified by the start and length parameters.

substr('abcdef', 1);     // bcdef
substr('abcdef', 1, 3);  // bcd
substr('abcdef', 0, 4);  // abcd
substr('abcdef', 0, 8);  // abcdef
substr('abcdef', -1, 1); // f

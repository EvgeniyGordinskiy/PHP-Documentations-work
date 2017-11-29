<?php

// array_rand — Pick one or more random entries out of an array

//  mixed array_rand ( array $array [, int $num = 1 ] )

// Picks one or more random entries out of an array, and returns the key (or keys) of the random entries. It uses a pseudo random number generator that is not suitable for cryptographic purposes.

//  mixed array_rand ( array $array [, int $num = 1 ] )

$input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
array_rand($input, 2);
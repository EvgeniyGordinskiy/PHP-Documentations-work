<?php

// vprintf — Output a formatted string

// 	int vprintf ( string $format , array $args )

// Display array values as a formatted string according to format (which is described in the documentation for sprintf()).

// Operates as printf() but accepts an array of arguments, rather than a variable number of arguments.

vprintf("%04d-%02d-%02d", explode('-', '1988-8-1')); // 1988-08-01

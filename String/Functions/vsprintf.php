<?php

// vsprintf — Return a formatted string

// string vsprintf ( string $format , array $args )

// Operates as sprintf() but accepts an array of arguments, rather than a variable number of arguments.

print vsprintf("%04d-%02d-%02d", explode('-', '1988-8-1')); // 1988-08-01

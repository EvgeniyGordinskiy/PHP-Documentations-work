<?php

// vfprintf — Write a formatted string to a stream

// int vfprintf ( resource $handle , string $format , array $args )

// Write a string produced according to format to the stream resource specified by handle.

//Operates as fprintf() but accepts an array of arguments, rather than a variable number of arguments.

if (!($fp = fopen('date.txt', 'w')))
    return;

vfprintf($fp, "%04d-%02d-%02d", array($year, $month, $day));
// will write the formatted ISO date to date.txt
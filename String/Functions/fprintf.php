<?php

// int fprintf ( resource $handle , string $format [, mixed $args [, mixed $... ]] )
// Write a string produced according to format to the stream resource specified by handle.

if (!($fp = fopen('date.txt', 'w'))) {
    return;
}

fprintf($fp, "%04d-%02d-%02d", $year, $month, $day);
// запишет форматированную ISO дату в файл date.txt
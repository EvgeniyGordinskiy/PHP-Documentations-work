<?php

// string number_format ( float $number [, int $decimals = 0 ] )

// string number_format ( float $number , int $decimals = 0 , string $dec_point = "." , string $thousands_sep = "," )

//  Format a number with grouped thousands

$number = 1234.56;

// english notation (default)
$english_format_number = number_format($number);
// 1,235

// French notation
$nombre_format_francais = number_format($number, 2, ',', ' ');
// 1 234,56

$number = 1234.5678;

// english notation without thousands separator
$english_format_number = number_format($number, 2, '.', '');
// 1234.57

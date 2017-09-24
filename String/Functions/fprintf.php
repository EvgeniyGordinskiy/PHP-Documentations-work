    <?php

// int fprintf ( resource $handle , string $format [, mixed $args [, mixed $... ]] )
// Write a string produced according to format to the stream resource specified by handle.



/*

% - a literal percent character. No argument is required.
b - the argument is treated as an integer, and presented as a binary number.
c - the argument is treated as an integer, and presented as the character with that ASCII value.
d - the argument is treated as an integer, and presented as a (signed) decimal number.
e - the argument is treated as scientific notation (e.g. 1.2e+2). The precision specifier stands for the number of digits after the decimal point since PHP 5.2.1. In earlier versions, it was taken as number of significant digits (one less).
E - like %e but uses uppercase letter (e.g. 1.2E+2).
f - the argument is treated as a float, and presented as a floating-point number (locale aware).
F - the argument is treated as a float, and presented as a floating-point number (non-locale aware). Available since PHP 5.0.3.
g - shorter of %e and %f.
G - shorter of %E and %f.
o - the argument is treated as an integer, and presented as an octal number.
s - the argument is treated as and presented as a string.
u - the argument is treated as an integer, and presented as an unsigned decimal number.
x - the argument is treated as an integer and presented as a hexadecimal number (with lowercase letters).
X - the argument is treated as an integer and presented as a hexadecimal number (with uppercase letters).

*/



if (!($fp = fopen('String/Functions/data.txt', 'w'))) {
    return;
}

fprintf($fp, "%04d-%02d-%02d", '2017', '9', '24'); // write in the file: 2017-09-24

fprintf($fp, "| %+-4d| %+-4d|\n", 1, -1);  //write in the file: output | +1  | -1  |

setlocale(LC_MONETARY, 'en_US.UTF-8');
$format = 'Hey %s, you have %01.2f %s  left on your deposit. ';
fprintf($fp,$format, 'Man',  45, localeconv()['currency_symbol']); //write in the file: "Hey Man, you have 45.00 $  left on your deposit." 

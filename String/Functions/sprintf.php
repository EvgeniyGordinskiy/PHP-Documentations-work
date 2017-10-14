<?php

// string sprintf ( string $format [, mixed $args [, mixed $... ]] )

// Returns a string produced according to the formatting string format.

$format = 'Hey %s, you have %01.2f %s left on your deposit. ';
sprintf($format, 'Man',  45, localeconv()['currency_symbol']); //write in the file: "Hey Man, you have 45.00 $  left on your deposit." 
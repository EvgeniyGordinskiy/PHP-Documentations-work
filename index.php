<?php
 
 $format = 'Hey %s, you have %01.2f %s left on your deposit. ';

var_dump(sprintf($format, 'Man',  45, localeconv()['currency_symbol'])); // S532
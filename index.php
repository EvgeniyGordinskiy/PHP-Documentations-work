<?php

if (!($fp = fopen('String/Functions/data.txt', 'w'))) {
    return;
}

setlocale(LC_MONETARY, 'en_US.UTF-8');

$money1 = 68.75;
$money2 = 54.35;
$money = $money1 + $money2;
// echo $money выведет "123.1";
//$len = fprintf($fp, '%01.2f', $money);

$format = 'Hey %s, you have %01.2f %s  left on your deposit. ';
var_dump(fprintf($fp,$format, 'Man',  45, localeconv()['currency_symbol']));
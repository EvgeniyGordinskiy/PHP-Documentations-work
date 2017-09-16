<?php

0 == 1; // false
0 == (bool)'text'; // false
(bool) 0.000000001; // true
(int)'text'; // 0
0 == 'text'; // true
0 === 'all'; // false

$array = ['A', 'B', 'C'];
$array[true]; // B
$array[false]; // A
<?php
//boolean

0 == 1; // false
0 == (bool)'text'; // false
(bool) 0.000000001; // true
(int)'text'; // 0
0 == 'text'; // true
0 === 'all'; // false

$array = ['A', 'B', 'C'];
$array[true]; // B
$array[false]; // A

//int
25/7;         // float(3.5714285714286) 
(int) 25/7; // int(3)
round(25/7);  // float(4) 

2147483648; // 32 byt, float(2147483648)
9223372036854775808; // 64 byt, float(9.2233720368548E+18)
'9223372036854775808' * 10; // float(9.2233720368548E+19)

gmp_strval(gmp_mul('9223372036854775808', 10)); // string '92233720368547758080'

// float
$a = 1.23456789;
$b = 1.23456780;
var_dump(0.21/0.7 === 0.3);


// logic_operators
false or $x = false or $x = 777; // 777
false || false || 777; // true
false || false || 777 &&  false || false || 777; // true
'text' <> 0; // false


//array
unset ($array[false]); //  1 => string 'B'  2 => string 'C'
unset ($array[1]); //  0 => string 'B'  2 => string 'C'
unset ($array[2]); //  0 => string 'B'  2 => string 'C'




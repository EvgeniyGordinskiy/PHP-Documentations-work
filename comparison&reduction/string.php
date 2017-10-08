<?php


//------------------------  ==  --------------------------- 

// Empty string
'' == 0; // true
'' == 1; // false
'' == []; // false
'' == 0.0; // true
'' == true; // false

// Not eempty string
"0000" == 0; // true
"0e12" == 0; // true
"1abc" == 1; // true
"0abc" == 0; // true
"abc" == 0; // true


// when comparing a string turns into a number
"0e12345" == "0e54321"; // true
"0e12345" <= "1";       // true
"0e12345" == "0";       // true
"0xF" == "15";          // true

(array) ''; // [0=> '']
(object) ''; // { publci 'scalar => ''}

'10e1' + 3; // float 103
'dfs' + 3; // int 3
'1e2' * 3; // float 300
'e2' * 3; // int 0
'6e2' / 3; // float 200
'e2' / 3; // int 0

// Convert to a string
(string) 3; // '3'
(string) 3e5; // '300000'
(string) 3e500000; // 'INF'
(string) 3.2; // '3.2'
(string) true; // '1'
(string) false; // ''
// (string) []; 'Array', Notice: Array to string conversion
// (string)  new stdClass(); Catchable fatal error: Object of class stdClass could not be converted to string
class TestClass
{
    public $foo;

    public function __construct($foo)
    {
        $this->foo = $foo;
    }

    public function __toString()
    {
        return $this->foo;
    }
}

(string)  new TestClass('hello'); // 'hello'

// Functions that work only with a single-byte string
 //substr(), strpos(), strlen(), strcmp()

strlen('á'); // 2 , mb_strlen("á", 'UTF-8') => 1
substr('аепр',0,2); // 'a', mb_substr("аепр",0,2, 'UTF-8') => 'ае'
strpos('аепр', 'п'); // 4 mb_strpos('аепр', "п", 0, 'UTF-8') => 2
strcmp('Аепррр', 'аЕпр'); // 4
strcmp('апр', 'аепр'); // 10
strcmp('аепр', 'аепр'); // 0


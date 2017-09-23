<?php

// mixed count_chars ( string $string [, int $mode = 0 ] )
// Counts the number of occurrences of every byte-value (0..255) in string and returns it in various ways.


$data = "Two Ts'' and one F.";

count_chars($data, 0);
/*
an array with the byte-value as key and the frequency of every byte as value
...

 35 => int 0
  36 => int 0
  37 => int 0
  38 => int 0
  39 => int 2 - '
  40 => int 0
  41 => int 0
  42 => int 0
  43 => int 0
  44 => int 0
  45 => int 0
  46 => int 1 - .

  ...

*/

count_chars($data, 1);
/*
same as 0 but only byte-values with a frequency greater than zero are listed.

array (size=11)
  32 => int 4 - space
  46 => int 1 - point
  70 => int 1 - F
  84 => int 2 - T
  97 => int 1 - a
  100 => int 1 - d
  101 => int 1 - e
  110 => int 2 - n
  111 => int 2 - o
  115 => int 1 - s
  119 => int 1 - w

*/

count_chars($data, 2);
/*
same as 0 but only byte-values with a frequency equal to zero are listed
...

 35 => int 0
  36 => int 0
  37 => int 0
  38 => int 0
  40 => int 0
  41 => int 0
  42 => int 0
  43 => int 0
  44 => int 0
  45 => int 0
  47 => int 0
  48 => int 0

  ...

*/

count_chars($data, 3);
/*
a string containing all unique characters is returned

'.FTadenosw'
*/

count_chars($data, 4);
/*
 a string containing all not used characters is returned

'�	

!"#$%&()*+,-/0123456789:;<=>?@ABCDEGHIJKLMNOPQRSUVWXYZ[\]^_`bcfghijklmpqrtuvxyz{|}~������������
... '
*/
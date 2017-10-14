<?php

// int similar_text ( string $first , string $second [, float &$percent ] )

// This calculates the similarity between two strings as described in Programming Classics: Implementing the World's Best Algorithms by Oliver (ISBN 0-131-00413-1). Note that this implementation does not use a stack as in Oliver's pseudo code, but recursive calls which may or may not speed up the whole process. Note also that the complexity of this algorithm is O(N**3) where N is the length of the longest string.

$var_1 = 'PHP IS GREAT'; 
$var_2 = 'WITH MYSQL'; 

similar_text($var_1, $var_2, $percent); // 27.272727272727 

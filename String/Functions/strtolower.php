<?php

// string strtolower ( string $string )


// Returns string with all alphabetic characters converted to lowercase.

$str = "Mary Had A Little Lamb and She LOVED It So";
$str = strtolower($str);
echo $str;  // Prints mary had a little lamb and she loved it so

$string = "Австралия"; 
$string = mb_convert_case($string, MB_CASE_LOWER, "UTF-8"); 
echo $string; 

//output is: австралия 

mb_strtolower("mĄkA",'UTF-8'); // maka


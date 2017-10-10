<?php

 // int print ( string $arg )

// print is not actually a real function (it is a language construct) so you are not required to use parentheses with its argument list.

print "escaping characters is done \"Like this\".";

print "foo is $foo"; // foo is foobar
$var = print "foo"; // foo
var_dump($var); // int 1

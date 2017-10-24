<?php

 // stripcslashes — Un-quote string quoted with addcslashes()

 // Returns a string with backslashes stripped off. Recognizes C-like \n, \r ..., octal and hexadecimal representation.


stripslashes('\T\e\s\t'); // 'Tes	' 
stripslashes('\f\o\o\[ \]'); // 'oo[ ]' 

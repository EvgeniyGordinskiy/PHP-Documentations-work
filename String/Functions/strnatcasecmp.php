<?php

// int strnatcasecmp ( string $str1 , string $str2 )

// strnatcasecmp — Case insensitive string comparisons using a "natural order" algorithm

// This function implements a comparison algorithm that orders alphanumeric strings in the way a human being would. The behaviour of this function is similar to strnatcmp(), except that the comparison is not case sensitive. For more information see: Martin Pool's » Natural Order String Comparison page.

strnatcasecmp("Img12.png", "img10.png"); // 1
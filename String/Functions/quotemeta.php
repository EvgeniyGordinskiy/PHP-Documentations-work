<?php

// string quotemeta ( string $str )

// Returns a version of str with a backslash character (\) before every character that is among these:
// . \ + * ? [ ^ ] ( $ )

$str = "Hello world. 1+1 ^ (can [you] hear me?)";
 quotemeta($str); // 'Hello world\. 1\+1 \^ \(can \[you\] hear me\?\)'
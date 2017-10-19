<?php

// string strip_tags ( string $str [, string $allowable_tags ] )

// strip_tags — Strip HTML and PHP tags from a string
// This function tries to return a string with all NULL bytes, HTML and PHP tags stripped from a given str. It uses the same tag stripping state machine as the fgetss() function.
// HTML comments and PHP tags are also stripped. This is hardcoded and can not be changed with allowable_tags.

$text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
strip_tags($text); // Test paragraph. Other text
strip_tags($text, '<p><a>'); // <p>Test paragraph.</p> <a href="#fragment">Other text</a>
$data = '<br>Each<br/>New<br />Line';
strip_tags($data, '<br>');  //  "<br>Each<br/>New<br />Line"
strip_tags($data, '<br/>'); //  "EachNewLine"
strip_tags($data, '<br />'); // "EachNewLine"
strip_tags($data, '<br >'); // "EachNewLine"

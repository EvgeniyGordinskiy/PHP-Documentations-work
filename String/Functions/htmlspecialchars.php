<?php

// string htmlspecialchars ( string $string [, int $flags = ENT_COMPAT | ENT_HTML401 [, string $encoding = ini_get("default_charset") [, bool $double_encode = true ]]] )

/*

Certain characters have special significance in HTML, and should be represented by HTML entities if they are to preserve their meanings. This function returns a string with these conversions made. If you require all input substrings that have associated named entities to be translated, use htmlentities() instead.

If the input string passed to this function and the final document share the same character set, this function is sufficient to prepare input for inclusion in most contexts of an HTML document. If, however, the input can represent characters that are not coded in the final document character set and you wish to retain those characters (as numeric or named entities), both this function and htmlentities() (which only encodes substrings that have named entity equivalents) may be insufficient. You may have to use mb_encode_numericentity()

*/

$new ="<a href='test'>Test  était </a>";

$htmlEntities = htmlentities($new, ENT_QUOTES);          // '&lt;a href=&#039;test&#039;&gt;Test  &eacute;tait &lt;/a&gt;'
$htmlSpecialChars = htmlspecialchars($new, ENT_QUOTES); //  '&lt;a href=&#039;test&#039;&gt;Test  était &lt;/a&gt;'
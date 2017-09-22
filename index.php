<?php



var_dump(get_html_translation_table(HTML_ENTITIES, ENT_QUOTES | ENT_HTML5));

$s = iconv("ISO-8859-8", "UTF-8", hebrev(iconv("UTF-8", "ISO-8859-8", $s)));

// array get_html_transltion_table ([ int $table = HTML_SPECIALCHARS [, int $flags = ENT_COMPAT | ENT_HTML_401 [, string $encoding = "UTF-8"]]] )
// get_html_translation_table will return the translation table that is used internally for htmlspecialchars() and htmletities()

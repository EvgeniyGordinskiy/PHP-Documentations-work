<?php

// array get_html_translation_table ([ int $table = HTML_SPECIALCHARS [, int $flags = ENT_COMPAT | ENT_HTML401 [, string $encoding = "UTF-8" ]]] )
// get_html_translation_table() will return the translation table that is used internally for htmlspecialchars() and htmlentities().

var_dump(get_html_translation_table(HTML_ENTITIES, ENT_QUOTES | ENT_HTML5));
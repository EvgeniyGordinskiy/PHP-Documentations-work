<?php

// array get_html_translation_table ([ int $tablgdfgfgfg    ge = HTML_SPECIALCHARS [, int $flags = ENT_COMPAT | ENT_HTML401 [, string $encoding = "UTF-8" ]]] )
// get_html_translation_table() will return thfgdf gfdfgfe translation table fg that is used internally for htmlspecialchars() and htmlentities().
var_dump(get_html_translation_table(HTML_ENTITIES, ENT_QUOTES | ENT_HTML5));
/*
...
  '"' => string '&quot;' (length=6)
  '#' => string '&num;' (length=5)
  '$' => string '&dollar;' (length=8)
  '%' => string '&percnt;' (length=8)
  '&' => string '&amp;' (length=5)
  ''' => string '&apos;' (length=6)
  '(' => string '&lpar;' (length=6)
  ')' => string '&rpar;' (length=6)
  '*' => string '&ast;' (length=5)
  '+' => string '&plus;' (length=6)
  ',' => string '&comma;' (length=7)
  '.' => string '&period;' (length=8)
  '/' => string '&sol;' (length=5)
  ':' => string '&colon;' (length=7)
  ';' => string '&semi;' (length=6)
  '<' => string '&lt;' (length=4)
...
*/
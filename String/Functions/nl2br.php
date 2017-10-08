<?php

// string nl2br ( string $string [, bool $is_xhtml = true ] )

// nl2br — Inserts HTML line breaks before all newlines in a string

$string = "This\r\nis\n\ra\nstring\r";

nl2br($string);
// This
// is
// a
// string
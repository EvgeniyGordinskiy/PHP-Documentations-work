<?php

// 	string html_entity_decode ( string $string [, int $flags = ENT_COMPAT | ENT_HTML401 [, string $encoding = ini_get("default_charset") ]] )

// html_entity_decode() is the opposite of htmlentities() in that it converts all HTML entities in the string to their applicable characters.

/*

ENT_COMPAT	Will convert double-quotes and leave single-quotes alone.
ENT_QUOTES	Will convert both double and single quotes.
ENT_NOQUOTES	Will leave both double and single quotes unconverted.
ENT_HTML401	Handle code as HTML 4.01.
ENT_XML1	Handle code as XML 1.
ENT_XHTML	Handle code as XHTML.
ENT_HTML5	Handle code as HTML 5.

*/
$orig = "I'll \"walk\" the <b>dog</b> now";

$a = htmlentities($orig);  // I'll &quot;walk&quot; the &lt;b&gt;dog&lt;/b&gt; now

$b = html_entity_decode($a); // I'll "walk" the <b>dog</b> now

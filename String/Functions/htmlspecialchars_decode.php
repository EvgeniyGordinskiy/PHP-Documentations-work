<?php

// string htmlspecialchars_decode ( string $string [, int $flags = ENT_COMPAT | ENT_HTML401 ] )

// This function is the opposite of htmlspecialchars(). It converts special HTML entities back to characters. The converted entities are: &amp;, &quot; (when ENT_NOQUOTES is not set), &#039; (when ENT_QUOTES is set), &lt; and &gt;.

$str = "<p>this -&gt; &quot;</p>\n";

htmlspecialchars_decode($str); // <p>this -> "</p>

htmlspecialchars_decode($str, ENT_NOQUOTES); // <p>this -> &quot;</p>


$new ="<a href='test'>Test  était </a>";

$htmlEntities = htmlentities($new, ENT_QUOTES);          // '&lt;a href=&#039;test&#039;&gt;Test  &eacute;tait &lt;/a&gt;'
$htmlSpecialChars = htmlspecialchars($new, ENT_QUOTES); //  '&lt;a href=&#039;test&#039;&gt;Test  était &lt;/a&gt;'

html_entity_decode($htmlEntities, ENT_QUOTES); // '<a href='test'>Test  était </a>'
htmlspecialchars($htmlSpecialChars, ENT_QUOTES); // '<a href='test'>Test  était </a>'
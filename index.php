<?php

var_dump(htmlspecialchars("a\x80b", ENT_DISALLOWED));     // string(2) "ab"
var_dump(htmlspecialchars("a\x80b", ENT_SUBSTITUTE)); // 'a�b'

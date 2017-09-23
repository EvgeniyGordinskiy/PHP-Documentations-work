<?php

false or $x = false or $x = 777; // 777
false || false || 777; // true
false || false || 777 &&  false || false || 777; // true
'text' <> 0; // false
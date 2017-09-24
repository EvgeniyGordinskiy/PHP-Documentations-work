<?php

// string metaphone ( string $str [, int $phonemes = 0 ] )

// Calculates the metaphone key of str.

metaphone('programming'); // 'PRKRMNK'
metaphone('programmer'); // 'PRKRMR'

metaphone('programming', 5); // 'PRKRM
metaphone('programmer', 5); // 'PRKRM
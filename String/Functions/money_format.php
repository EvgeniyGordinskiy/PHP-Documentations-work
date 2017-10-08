<?php

// string money_format ( string $format , float $number )

// money_format — Formats a number as a currency string

$number = 1234.56;
setlocale(LC_MONETARY, 'en_US.utf8');
money_format('%=*#6n', $number); // $**1,234.56
money_format('%=*#6i', $number); // USD**1,234.56
money_format('%=*^#6n', $number); // $**1234.56
money_format('%=*+#6n', -1234.56); // -$**1,234.56
money_format('%=*(#6n', -1234.56); // ($**1,234.56)
money_format('%=*!#6n', $number); //  **1,234.56
money_format('%=*#6.10n', $number); // $**1,234.5600000000
echo money_format('%=*#6.10n', $number). "\n"; // $**1,234.56


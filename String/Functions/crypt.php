<?php

// string crypt ( string $str [, string $salt ] )
// crypt() will return a hashed string using the standard Unix DES-based algorithm or alternative algorithms that may be available on the system.

// The salt parameter is optional. However, crypt() creates a weak hash without the salt. PHP 5.6 or later raise an E_NOTICE error without it. Make sure to specify a strong enough salt for better security.

crypt('mypassword',995959565); // '99CEOpKW3.s.o'
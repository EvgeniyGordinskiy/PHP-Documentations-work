<?php

// array localeconv ( void )

// Returns an associative array containing localized numeric and monetary formatting information.

setlocale(LC_MONETARY, 'en_US.UTF-8');

localeconv();

/*
 
'decimal_point' => string '.' (length=1)
  'thousands_sep' => string '' (length=0)
  'int_curr_symbol' => string 'USD ' (length=4)
  'currency_symbol' => string '$' (length=1)
  'mon_decimal_point' => string '.' (length=1)
  'mon_thousands_sep' => string ',' (length=1)
  'positive_sign' => string '' (length=0)
  'negative_sign' => string '-' (length=1)
  'int_frac_digits' => int 2
  'frac_digits' => int 2
  'p_cs_precedes' => int 1
  'p_sep_by_space' => int 0
  'n_cs_precedes' => int 1
  'n_sep_by_space' => int 0
  'p_sign_posn' => int 1
  'n_sign_posn' => int 1
  'grouping' => 
    array (size=0)
      empty
  'mon_grouping' => 
    array (size=2)
      0 => int 3
      1 => int 3

*/
<?php

// string setlocale ( int $category , string $locale [, string $... ] )

// Sets locale information.

/*
LC_ALL for all of the below
LC_COLLATE for string comparison, see strcoll()
LC_CTYPE for character classification and conversion, for example strtoupper()
LC_MONETARY for localeconv()
LC_NUMERIC for decimal separator (See also localeconv())
LC_TIME for date and time formatting with strftime()
LC_MESSAGES for system responses (available if PHP was compiled with libintl)
*/

/* Set locale to Dutch */
setlocale(LC_ALL, 'nl_NL');
<?php

// string nl_langinfo ( int $item )

//nl_langinfo — Query language and locale information

setlocale(LC_ALL, 'en_US.utf8');

nl_langinfo(ABDAY_1); // Sun
nl_langinfo(ABDAY_2); // Mon
nl_langinfo(DAY_1);   // Sunday
nl_langinfo(ABMON_1); // Jan
nl_langinfo(MON_1);   // January
nl_langinfo(AM_STR);  // AM
nl_langinfo(PM_STR);  // PM
nl_langinfo(D_T_FMT); // %a %d %b %Y %r %Z .String that can be used as the format string for strftime() to represent time and date.
nl_langinfo(D_FMT); // %m/%d/%Y .String that can be used as the format string for strftime() to represent date.
nl_langinfo(T_FMT); // %r .String that can be used as the format string for strftime() to represent time.
nl_langinfo(T_FMT_AMPM); // %I:%M:%S %p .String that can be used as the format string for strftime() to represent time in 12-hour format with ante/post meridian.
//----------------------- Monetary-------------------------------
nl_langinfo(CRNCYSTR); // -$

//---------------------LC_NUMERIC Category Constants-----------
nl_langinfo(RADIXCHAR);      // .
nl_langinfo(THOUSANDS_SEP);  // ,
nl_langinfo(YESEXPR);        // ^[yY].* .Regex string for matching "yes" input.
nl_langinfo(NOEXPR);         // ^[nN].* .Regex string for matching "no" input.
nl_langinfo(CODESET);        //  UTF-8

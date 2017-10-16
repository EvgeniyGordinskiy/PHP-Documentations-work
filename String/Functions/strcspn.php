<?php

// int strcspn ( string $subject , string $mask [, int $start [, int $length ]] )

// strcspn — Find length of initial segment not matching mask

// Returns the length of the initial segment of subject which does not contain any of the characters in mask.

// If start and length are omitted, then all of subject will be examined. If they are included, then the effect will be the same as calling strcspn(substr($subject, $start, $length), $mask) (see substr for more information).


strcspn('hello', 'he'); // 0
strcspn('hello', 'llo'); // 2


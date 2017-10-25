<?php

// substr_compare — Binary safe comparison of two strings from an offset, up to length characters

// int substr_compare ( string $main_str , string $str , int $offset [, int $length [, bool $case_insensitivity = false ]] )

// substr_compare() compares main_str from position offset with str up to length characters.

substr_compare("abcde", "bc", 1, 2); // 0
substr_compare("abcde", "de", -2, 2); // 0
substr_compare("abcde", "bcg", 1, 2); // 0
substr_compare("abcde", "BC", 1, 2, true); // 0
substr_compare("abcde", "bc", 1, 3); // 1
substr_compare("abcde", "cd", 1, 2); // -1
substr_compare("abcde", "abc", 5, 1); // warning
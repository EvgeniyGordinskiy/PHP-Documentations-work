<?php

// strspn — Finds the length of the initial segment of a string consisting entirely of characters contained within a given mask

// 	int strspn ( string $subject , string $mask [, int $start [, int $length ]] )


// Finds the length of the initial segment of subject that contains only characters from mask.

strspn("user/{}/post", "user/{}/post/{}"); // 12

strspn("user/{I}/post", "user/{}/post/{}"); // 6


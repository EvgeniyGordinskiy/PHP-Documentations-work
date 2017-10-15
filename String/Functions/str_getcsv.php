<?php

// array str_getcsv ( string $input [, string $delimiter = "," [, string $enclosure = '"' [, string $escape = "\\" ]]] )

// Parses a string input for fields in CSV format and returns an array containing the fields read.

$csv = array_map('str_getcsv', file('users.csv'));
array_walk($csv, function(&$a) use ($csv) {
    $a = array_combine($csv[0], $a);
});
var_dump($csv[0]);
/*
      array (size=10)
      2 => string '2' (length=1)
      '' => string '' (length=0)
      'alex@brown.com' => string 'alex@brown.com' (length=14)
      '$2y$10$jklJ26.eAunEv0qYtHo7Ie8yGu.JAOjLCUgCxvsFA/iL1/4S1A/8u' => string '$2y$10$jklJ26.eAunEv0qYtHo7Ie8yGu.JAOjLCUgCxvsFA/iL1/4S1A/8u' (length=60)
      'Alex' => string 'Alex' (length=4)
      'Brown' => string 'Brown' (length=5)
      'y' => string 'y' (length=1)
      '\N' => string '\N' (length=2)
      '2017-06-10 14:27:52' => string '2017-06-10 14:27:52' (length=19)
      0 => string '0' (length=1)

 */
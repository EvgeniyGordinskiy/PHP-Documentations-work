<?php

// strtr — Translate characters or replace substrings

// string strtr ( string $str , string $from , string $to )

// string strtr ( string $str , array $replace_pairs )

$str = "Mary Had A Little это да Lamb and She LOVED It So";

strtr($str, 'Had', 'Mad'); // 'Mary Mad A Little это да Lamb and She LOVED It So'

$str = "Marry Had A Little Marry Lamb and She LOVED It So";
$trans = [
	'Marry' => 'Jassy',
	'Little' => 'Big',
];
strtr($str, $trans); // 'Jassy Had A Big Jassy Lamb and She LOVED It So';

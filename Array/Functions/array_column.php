<?php

// array_column — Return the values from a single column in the input array

// array array_column ( array $input , mixed $column_key [, mixed $index_key = null ] )

// array_column() returns the values from a single column of the input, identified by the column_key. Optionally, an index_key may be provided to index the values in the returned array by the values from the index_key column of the input array.

$array = [
	['id' => 1, 'title' => 'tree'],
	['id' => 2, 'title' => 'sun'],
	['id' => 3, 'title' => 'cloud'],
];

array_column($array, 'id'); // [1, 2, 3]

$cinemas = Cinema::find()->all();
$cinema_ids = array_column($cinemas, 'id'); // ...php7
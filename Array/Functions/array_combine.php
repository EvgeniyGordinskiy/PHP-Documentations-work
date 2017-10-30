<?php

// array_combine — Creates an array by using one array for keys and another for its values

// array array_combine ( array $keys , array $values )

// Creates an array by using the values from the keys array as keys and the values from the values array as the corresponding values.

$models = [$model1, $model2, $model3];

$id_to_title = array_combine(
	array_column($models, 'id'),
	array_column($models, 'title')
);
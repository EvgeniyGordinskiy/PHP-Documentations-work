<?php

// array_product — Calculate the product of values in an array

// number array_product ( array $array )

// array_product() returns the product of values in an array.

array_product([2, 2, 2]); // 8

array_product([2, 2, 2, false]); // 0

array_product([2, 2, 2, '']); // 0

array_product([2, 2, 2, [] ]); // 8
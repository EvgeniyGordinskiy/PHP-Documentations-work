<?php

$str = "user/{id}/post/{post_id}";
$trans = [
	'{}' => '{}',
];
var_dump(strtr($str, $trans)); // 1);


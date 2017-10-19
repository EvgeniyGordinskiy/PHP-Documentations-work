<?php
// $pattern = '/\/user\/[a-zA-Z0-9]\/post\/[a-zA-Z0-9]/i';
$url = '/use<>r/7%&/post/9';
$url = preg_replace('/[^a-zA-Z0-9\/_-]+/', '', $url);
$subject = '/user/{id}/post/{id_post}';
$pattern = preg_replace(['/{(.*?)}/', '/\//'], ['[a-zA-Z0-9]', '\/'], $subject);
// $pattern = preg_replace('/\//', '\/', $pattern);
var_dump($pattern);
var_dump($url);
var_dump(preg_match("/$pattern/i", $url));
var_dump(substr_count($url, "/"));


<?php
header('content-type:text/html;charset=uft-8');

var_dump(false xor false);  // false
var_dump(true xor false);   // true
var_dump(true xor true);    // false
$i = 1;
$j = 0;
var_dump(--$i || --$j);
$result = 0 ? : 'this is a test';
var_dump($result);


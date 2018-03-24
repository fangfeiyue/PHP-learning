<?php
date_default_timezone_set('prc');
header('content-type:text/html;charset=utf-8');


$pwd = $_POST['pwd'];
$email = $_POST['email'];
$userName = $_POST['userName'];

print_r(compact('userName', 'pwd', 'email'));

$arr = compact('userName', 'pwd', 'email');

$keys = array_keys($arr);
$values = array_values($arr);

// insert (x, x, x) values ('x', 'x', 'x');

$keysStr = join(',', $keys);
echo $keysStr;
echo '<hr/>';
$valueStr = "'".join("','", $values)."'";
echo $valueStr;
echo '<hr/>';
echo "insert (${keysStr}) values (${valueStr});";
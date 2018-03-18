<?php
// 值传递和引用传递
header('content-type:text/html;charset=utf-8');
date_default_timezone_set('PRC');

$c = 3;
$b = 4;

function change($c){
    $c = 5;
    return $c;
}

echo change($c), '<br/>';
echo $c;


$obj = new StdClass();
$obj->a = 3;
print_r($obj);


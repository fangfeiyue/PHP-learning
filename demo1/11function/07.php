<?php
header('content-type:text/html;charset=utf-8');
date_default_timezone_set('prc');

function test(array $arr){
    print_r($arr);
}

test([1, 2]);
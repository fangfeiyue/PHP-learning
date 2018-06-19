<?php
header('content-type:text/html;charset=utf-8');
// 声明类
class Cat {
    public $name = '咪咪';
    public $sex = null;
    public function jiao () {
        echo '喵喵~~~';
    }
}

$cat = new Cat;
$cat2 = new Cat;

var_dump($cat);
var_dump($cat2);
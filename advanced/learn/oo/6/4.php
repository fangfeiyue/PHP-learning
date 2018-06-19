<?php
header('content-type:text/html;charset=utf-8');

class MyLoader {
    public function func1 ($a) {
        include './class_b/'.$a.'.class.php';
    }
    public function init () {
        spl_autoload_register([$this, 'func1'], true, true);
    }
}

$myLoader = new MyLoader;
$myLoader->init();

class A extends B {

}
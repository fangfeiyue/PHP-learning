<?php
class MyLoader {
    public static function test ($a) {
        include './class_b/'.$a.'.class.php';
    }
}

spl_autoload_register(['MyLoader', 'test'], true, true);

class A extends B {

}
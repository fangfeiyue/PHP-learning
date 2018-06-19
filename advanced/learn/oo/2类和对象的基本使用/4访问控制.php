<?php
header('content-type:text/html;charset=utf-8');

class MyClass {
    public $a = 'public';
    protected $b = 'protected';
    private $c = 'private';

    public function test () {
        echo '<br/>',$this->a,' ', $this->b,' ', $this->c;
    }
}

$mc = new MyClass;
echo $mc->a;
$mc->test();
// echo $mc->b;
// echo $mc->c;
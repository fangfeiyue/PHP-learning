<?php
header('content-type:text/html;charset=utf-8');

class Test {
    public $str = '1234';
}

$test1 = new Test;
$test2 = $test1;

var_dump($test1);
echo '<br/>';
var_dump($test2);

$test1->str = '678';

echo '<br/>';
var_dump($test1);
echo '<br/>';
var_dump($test2);

$test1 = '123';
echo '<br/>';
var_dump($test1); // 123
echo '<br/>';
var_dump($test2); // object(Test)#1 (1) { ["str"]=> string(3) "678" }

$test2 = &$test1;
echo '<br/>';
var_dump($test1); // 123
echo '<br/>';
var_dump($test2); // 123




class Test1{
    Public $str='abc';
}
$a=new Test1();
$b=$a;
$a->str='456';
echo "</br>";
var_dump($a) ;
echo "</br>";
var_dump($b) ;
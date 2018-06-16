<?php
header('content-type:text/html;charset=utf-8');

class MyClass {
    public static $a = 'static';
    public $b = '123';
    public static function func1 () {
        echo '静态方法调用'.self::$a;
    }
}

echo MyClass::$a;
MyClass::func1();
// echo MyClass::$b; // 非静态调用失败

$mc = new MyClass;
// echo $mc->a; // 对象使用->去调用静态属性 失败
echo $mc->b; // 123



// 静态方法当中调用静态方法

class Test {
    public static $name = 'fang';

    public static function getName () {
        echo '<br/>'.self::$name;
    }
    public static function getEcho () {
        self::getName();
    }
    public function func3 () {
        echo '<br/>'.self::$name;
        echo '<br/>'.Test::$name;
        // echo '<br/>'.$this->name; // 调用静态属性失败
        echo '<br/>'.$this->getName();  //
    }
}

$test = new Test;
$test->getEcho();
Test::getEcho();
$test->func3();






class Shop
{
    //设置$banana和$price两个属性
    public static $banana;
    public static $price;
   //设置价格的静态方法
	public static function setPrice($price){
		 self::$price = $price;
	}
    //获取价格的方法
	public function getPrice(){
		echo Shop::$price;
	}
}
//实例化对象
$shop = new Shop;
//调用静态发方法设置价格
$shop->setPrice(100);
//获取设置后的价格并打印
$shop->getPrice();




class Testt{
    const age=12;
    function test1 () {
        echo self::age.'居然成功了';
    }
}

echo Testt::age; //12


// 警告  Deprecated: Non-static method Testt::test1() should not be called statically in /Users/toto/Desktop/PHP/php/PHP-learning/advanced/learn/3封装/3static关键字.php on line 83
Testt::test1(); //12


$testt = new Testt;
$testt->test1(); // 成功调用
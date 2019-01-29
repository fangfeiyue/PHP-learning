<?php
date_default_timezone_set("PRC");
header("content-type:text/html;charset=utf-8");

// function test() {
//   $message = "hello";
//   $say = function($str)use($message){
//     echo $message;
//     echo $str;
//   };

//   $say(" world");
// }

// test();

$message = "hello";

// 没有 "use"
$say = function() {
  var_dump($message);
};

echo $say();


// 继承 $message
$say = function()use($message) {
  var_dump($message);
};

echo $say(); // string(5) "hello"

// Inherited variable's value is from when the function
// is defined, not when called
$message = "world";
echo $say($message); // string(5) "hello"


$message = "hello";

$say = function() use (&$message) {
  var_dump($message);
};

echo $say();    // string(5) "hello"

 
$message = "world";
echo $say();

// Closures can also accept regular arguments
$say = function($arg) use ($message) {
  var_dump($arg.''.$message);
};

$say("hello ");   // string(11) "hello world"

echo "<hr/>";

class Cart {
  const PRICE_EGGS   = 6.95;
  const PRICE_MILK   = 3.00;
  const PRICE_BUTTER = 1.00;

  protected $products = array();

  public function add(string $product, int $quantity) {
    $this->products[$product] = $quantity;
  }

  public function getQuantity($product) {
    return $this->products[$product]?:FALSE;
  }

  public function getTotal($tax) {
    $total = 0.00;

    $callback = function($quantity, $product) use ($tax, &$total) {
      //  constant  返回一个常量的值，当你不知道常量名，却需要获取常量的值时，constant() 就很有用了。也就是常量名储存在一个变量里，或者由函数返回常量名
      // strtoupper 将字符串转化为大写
      $pricePerItem = constant(__CLASS__."::PRICE_".strtoupper($product));
      $total += ($pricePerItem * $quantity) * ($tax + 1.0);
    };

    // array_walk 使用用户自定义函数对数组中的每个元素做回调处理
    array_walk($this->products, $callback);
    // round  对浮点数进行四舍五入
    return round($total, 2);
  }
}

$myCart = new Cart;

$myCart->add("milk", 3);
$myCart->add("eggs", 6);
$myCart->add("butter", 1);

// 打出总价格，其中有5%的销售税
print $myCart->getTotal(0.05)."\n";   // 54.29

echo "<hr/>";

$message = "hello ";
function test() {
  global $message;
  $say = function() use($message)  {
    echo $message;
  };
  $say();
  echo "world";
}

$func = test();

echo "<hr/>";

function test1(bool $param) {
  echo $param;
}

test1(true);
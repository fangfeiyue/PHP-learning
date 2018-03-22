# PHP学习
2017年5月28日 星期日

1.如果文档中只有PHP结束标记要省略掉如：<?php...代码。原因是：如果使用闭合标签，任何由开发者，用户，或者FTP应用程序插入闭合标签后面的空格或空行都有可能会引起多余的输出、php错误、之后的输出无法显示、空白页。尤其在当使用include() 或者 require()时省略掉会更好些，这样不期望的白空格就不会出现在文件末尾，之后仍然可以输出响应标头

2.可变变量
```
<?php
$i = "j";
$j = "k";
$k = "hello world";
echo $$$i;//hello wolrd
```

#### 数据类型
1.标量类型：整型、浮点类型、bool、字符串
- var_dump()打印变量的详细信息，可以一次打印一个或者多个变量的详细信息
- 浮点数是有误差的，不要比较两个浮点数的大小

2.如果php文档中包含汉字，最好在文档头部写上下面这句话
```
<?php
//如果有中文，告诉浏览器以什么编码方式解析什么类型的文档
header('content-type:text/html;charset=urf-8');
```

#### 字符串

1.字符串型可以用三种方法定义：单引号形式、双引号形式和heredoc、nowdoc结构形式

2.当引号遇上美元符号怎么办？
- 当双引号中包含变量时，变量会与双引号中的内容连接在一起，所以双引号和解析变量；
- 当单引号中包含变量时，变量会被当做字符串输出,所以单引号不解析变量。

- 单引号只解析\'和\$两个转义符
```
$str = '!\r@\n#\t%1\\b\'\$de';//!\r@\n#\t%1\b'\$de
```
- 双引号解析所有的转移符
```
$str1 = "!\r@\n#\t%1\\b\"\$de";//! @ #	%1\b\"$de
```

3.PHP引擎在解析变量的时候会尽可能多的向后取合法字符，认为取的越多，这个变量的含义越明确
```
echo "我的名字是$username哈哈"//报错，$username哈哈没有定义，解决最简单的办法是添加空格，但这样会使字符串连接不紧凑，可以用花括号的方式解决。
```

4.花括号的作用
- 可以将PHP中的变量括成一个整体进行解析.分为{$变量名称}和${变量名称}两种写法
```
echo "我的名字是{$username}哈哈"//花括号中间不要有空格，否则会被当成字符串进行解析
```
- 可以将字符串中的指定字符做增删改查的操作
```
$string='king';

$string = 'king';

//查找首字母
echo $string{0}."<br/>";//k

//将n变成q,修改的时候只能一个字符替换一个字符
$string{2} = 'q';
echo $string."<br/>";//kiqg

//删除字符串中的i
$string{1}='';
echo $string."<br/>";//kqg

//在末尾添加感叹号
$string{4} = '!';
echo $string."<br/>";//kqg!

//PHP中一个汉字等于三个字符，不要对中文字符进行操作。
$string1 = '你好';
echo var_dump($string1)."<br/>";//长度为6
```

5.heredoc作用相当于双引号，比较适合写大段字符串，写法为：<<<名称..所需字符串..名称
```
<?php 
$string1 = <<<GOD
我有一只小毛驴，
我从来也不骑。
GOD;//GOD的名字是可以随便定义的，但最好大写，易于区分
echo $string1;
?>
```

6.nowdoc的写法：<<<'名称'.....名称。注意：名称的开头必须用单引号包裹，名称的结尾不用单引号包裹。==和heredoc一样，结束名称之前不能有任何的输出，空格都不行==

7.数组、对象、资源、空。数组可以存任何类型  
数组：$arr=array()  
对象：$stu = new Student();  

8.设置错误级别
```
//设置错误级别，E_ALL但是出了NOTI类型的
error_reporting(E_ALL&~E_NOTICE);

$string = '1234';
echo $string;//1234
unset($string);//销毁一个变量
echo($string);//null
```

复合类型--》数组、对象资源

#### 特殊类型
1资源(resource)
资源是由专门的函数来建立和使用的，例如打开文件、数据连接、图形画布,在不需要的时候应该被及时释放。如果我们忘记了释放资源，系统自动启用垃圾回收机制，在页面执行完毕后回收资源，以避免内存被消耗殆尽。

2.空类型
NULL（NULL）：NULL是空类型，对大小写不敏感，NULL类型只有一个取值，表示一个变量没有值。当被赋值为NULL，或者尚未被赋值，或者被unset()，这三种情况下变量被认为为NULL

3.通过unset()销毁变量
```
$a=$b=$c='king';
var_dump($a, $b, $c);//可以传多个参数
unset($a, $b, $c);//可以传多个参数
```

#### 五种伪类型：void、number、mixed、callable、...


#### PHP中的数据类型转换

1.自动转换（隐式转换）--程序会根据上下文环境自动的进行转换
- 其他类型转换成数值型  
1.true-->1  
2.false-->0  
3.null-->0  
4.字符串如果以非法字符开始，直接转换成0，如果字符串以合法数值开始，一直取到第一个非法数值为止
- 其他类型转换成字符串型  
1.数值型直接转换成数值本身  
2.true-->1  
3.false-->空字符串  
4.null-->空字符串  
5.对象不能直接转换成字符串  
6.数组-->Array

- 其他类型转换成布尔类型，转换成false的有：  
1.0-->false  
2.0.0-->false  
3.null-->false  
4.空数组array()-->false  
5.空字符串、'0'、"0"-->alse

- php中的注释
    - 单行注释  /或者#
    - 多行注释  /**/
- 可变变量的例子
```$i =  'j';
$j = 'k';
$k = 'hello wolrd';
```

- 打印变量的详细信息
var_dump(params);

- 浮点数是有误差的不要比较两个浮点数的大小

- 告诉浏览器以什么编码方式解析什么类型的文档，防止中文乱码
`header('content-type:text/html;charset=utf-8');`

- 单引号和双引号的区别
    - 单引号不解析变量；单引号只解析\和\\
    - 双引号解析变量；双引号解析所有的转义字符      

- {$var}和${var}都可以用来替换变量，建议用第一个

- heredoc和nowdoc
    - heredoc相当于双引号的作用,语法如下
    ```
    $heredoc = <<<EOF(名字可随意选取，但要配对，并且结尾不能有空格等多余的内容,可以用双引号包裹，不能用单引号哦)
        需要填充的内容
    EOF;
    ```
    - nowdoc相当于单引号的作用，语法如下
    ```
    $nowdoc = <<<'EOD'(必须用单引号包裹)
        需要填充的内容
    EOD;
    ```

- 产生空的情况null
    - 1.变量为声明直接使用 
    - 2.声明一个变量赋值为null 
    - 3.经过unset()注销过的变量，可以一次销毁一个或多个变量

- 设置错误级别E_ALL但是除了NOTICE
error_reporting(E_ALL&~E_NOTICE);

- mixed一个参数可以接受多种不同的(但不一定是所有的)类型

- 数据类型转换
    - 自动转换(隐式转换)
        - 其他类型转换成数值、bool、字符串,true转换成1，false转换成空字符串
            - $var = '0.0';$var = new StdClass();转换为true
            - $var = array();空数组转化为假的
    - 强制转换(显示转换)
        - 

2.强制转换（显示转换）


### 2017年6月7日 星期三
 
#### 3.3强制转换中的临时转换

1.通过(变量类型)$变量名称
```
//浮点转整型
$var1 = 3.8;
var_dump((int)$var1, (integer)$var1);//3，并非四舍五入

//转换为空
$var1 = true;
var_dump((unset)$var1);// null
```

2.通过系统函数实现
```
$var = true;
var_dump(strval($var));
```

2017年6月25日 星期日

#### 强制转换中的永久转换

1.settype(var, 'type');将变量设置成指定类型
```
$var1 = '123';
var_dump($var1); //string
settype($var1, 'int');
var_dump($var1); // int
```
2.检测变量类型：is_类型.注意不要使用gettype()得到变量的类型，因为后续返回值可能会改变
```
$var2 = 123;
var_dump(is_int($var2)); //true
```

3.检测是否为数值型或者是字符串形式的数值
```
$var3 = '123';
var_dump(is_numeric($var3)); //true

$var4 = '123a';
var_dump(is_numeric($var4)); //false
```

4. gettype — 获取变量的类型,`string gettype ( mixed $var )`返回 PHP 变量的类型 var.`不要使用 gettype() 来测试某种类型，因为其返回的字符串在未来的版本中可能需要改变。此外，由于包含了字符串的比较，它的运行也是较慢的。`使用 `is_*` 函数代替。

#### 常量-系统常量及自定义常量

1.系统常量
```
echo PHP_VERSION; //PHP版本
echo PHP_OS;    //系统版本
echo PHP_INT_MAX;   //整型最大值
```
2.自定义常量
- define函数定义常量
```
define($name, $value);
1.常量名称不加$符号
define('TEST', 'this is a const');
echo TEST;
2.常量名称最好大写，以字母或者下划线开始
3.常量默认区分大小写
4.常量定义之后可以在任何位置使用，作用域是全局的
5. 
```
- const定义常量
```
const TEST1 = 'www.wanliyangguang.com';
echo TEST1;
// 根据常量的名称获取常量的值
echo constant('TEST1');//www.wanliyangguang.com
```
- defined检测常量是否存在,如果存在返回true，否则返回false
```
var_dump(defined('TEST1'));//true，注意参数是字符串
```
- 获取所有已经定义的常量:get_defined_constants(),返回的是包含系统常量和自定义常量的数组
```
print_r()//打印数组的信息
print_r(get_defined_constants());
```

3.魔术常量
- __LINE__：得到当前的行号
- __FILE__：当前文件的绝对路径和文件名
- __DIR__：得到当前文件的路径，不带文件名
- __FUNCTION__:得到函数名
- __CLASS__:得到类名
- __METHOD__:得到当前类的方法名称
- __NAMESPACE__:命名空间
- __TRAIT__:当前TRAIT的名称

#### PHP中的预定义变量

- 所有的预定义变量都是全局变量
- $GLOBALS超全局变量，包含以下所有的预定义变量
- $_SERVERS服务器和执行环境信息变量
- $_ENV环境变量
- $_COOKIE HTTP cookies
- $_SESSION Http session变量
- $_FILES   文件上传信息变量
- $_GET     GET变量,主要接收以问好形式传递的数据
```
// html文件
<body>
    <a href="testA.php?userName=fang&age=12">点击我</a>
</body>

// 或者html文件
<form action="doSearch.php" method="get">
    <input type="search" name="keyword" id="" placeholder="请输入搜索内容">
    <input type="submit" value="搜索">
</form>


//php文件
<?php
header('content-type:text/html;charset=utf-8');
echo $_GET['userName'];
echo $_GET['age'];
```
- $_POST    POST变量
```
// html文件
<form action="doReg.php" method="post">
    <table border="1" width="70%" cellpadding="0" cellspacing="0" bgcolor="#abcdef ">
        <tr>
            <td align="right">用户名</td>
            <td><input type="text" name="userName" placeholder="请输入合法用户名"></td>
        </tr>
        <tr>
            <td align="right">密码</td>
            <td><input type="password" name="password"  placeholder="请输入密码"></td>
        </tr>
        <tr>
            <td align="right">邮箱</td>
            <td><input type="text" name="email" placeholder="请输入邮箱"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="注册"></td>
        </tr>
        <tr>
            <td>性别</td>
            <td>
                <input type="radio" name="sex" id="" value="男">男
                <input type="radio" name="sex" id="" value="女">女
                <input type="radio" name="sex" id="" value="保密">保密
            </td>
        </tr>
    </table>
</form>

// php文件

echo $_POST['userName'], '<br/>';
echo $_POST['password'], '<br/>';
echo $_POST['email'], '<br/>';
echo $_POST['sex'], '<br/>';
```
- $_REQUEST     $_GET+$_POST+$_COOKIE



#### PHP中的表达式与运算符

1.**幂运算
```
echo 3 ** 2; // 9
```

2017年6月26日 星期一

1.自增自减
```
//前自增自剪法
$var = 12;
echo ++$var, "<br/>"; //13
echo --$var, "<br/>"; //12 

//后自增自减
$var1 = 12;
echo $var++, "<br/>"; //12
echo $var--, "<br/>"; //13
```

2.bool类型不支持自增自减运算符
```
$bool = true;
echo '<br/>', ++$bool; // 1
```

3.null只支持自增运算符号
```
$var = null;
echo ++ $var; //1
```

4.得到指定字符的ascii码值:int ord(string $string)
```
$var = 'a';
echo ord($var); // 97
```

6.string chr (int $ascii)返回指定的字符
```
echo chr(97); // a
```

5.取余数
```
echo 3 % 8, '<br/>'; //3
echo 3 % -8, '<br/>'; //3
echo -3 % 8, '<br/>'; //-3
echo -3 % -8, '<br/>'; //-3
```

6.字符串只支持递增
```
$str = 'a';
echo '<br/>', ++$str; //b

$str = 'z';
echo '<br/>', ++$str; //aa
```

2017年7月1日 星期六

1.chr();根据值得到对应的ASCII
```
echo chr(98); // b
```

2.字符串连接符号.
```
$var3 = 'hellow';
$var4 = 'world';
$var5 = $var3.$var4;
echo $var5, "<br/>"; // helloworld
```

3.mt_rand(min, max);产生随机数

4.验证码
```
$code = '<span style="color:rgb('.mt_rand(0, 255).', '.mt_rand(0, 255).', '.mt_rand(0, 255).')">'.mt_rand(0, 9).'<span/>';
$code .= '<span style="color:rgb('.mt_rand(0, 255).', '.mt_rand(0, 255).', '.mt_rand(0, 255).')">'.mt_rand(0, 9).'<span/>';
$code .= '<span style="color:rgb('.mt_rand(0, 255).', '.mt_rand(0, 255).', '.mt_rand(0, 255).')">'.mt_rand(0, 9).'<span/>';
$code .= '<span style="color:rgb('.mt_rand(0, 255).', '.mt_rand(0, 255).', '.mt_rand(0, 255).')">'.mt_rand(0, 9).'<span/>';
echo $code;
```

5.比较运算符

- == 只比较值是否相等
- === 既要比较值，又要比较类型
- <> 不等于`1<>1`
- <=> 太空船运算符（组合比较符）当$a小于、等于、大于$b时 分别返回一个小于、等于、大于0的integer 值。 PHP7开始提供.
- $a ?? $b ?? $c	NULL合并操作符 从左往右第一个存在且不为 NULL 的操作数。如果都没有定义且不为 NULL，则返回 NULL。PHP7开始提供。
2017年7月9日 星期日

1.逻辑运算符

- 逻辑与 && or and 
- 逻辑或 || or or
- 逻辑异或 xor 相同为假
```
false xor false = false;
false xor true = true;
true xor true = false;
```

- 错误抑制符：抑制错误输出，通过@符号加到会产生错误的表达式前,但并不是所有的错误都可以抑制的，个人感觉没啥用
```
@var_dump(asdadf);
```

3.运算符优先级

-.和+是同一级别的

```
$i = 3;
$j = 8;
//期望输出的结果为:3+8=11,然而输出的是11，原因是.和+是同一级别的,实际运算为："3+8=3"+8=11
echo "{$i}+{$j}=".$i+$j, '<br/>';
```

4.流程控制
- date($format, $time);
```
date_default_timezone_set('PRC');//设置时区,PRC中华人民共和国
date("Y年m月d日 H:m:s");//输出当前时间
date('w');返回一周的第几天0-6
```

- time()得到当前的时间戳,返回的是毫秒数

5.if的另一种写法
```
if(true):
echo "aa", "<br/>";
else:
echo "bb", "<br/>";
endif;
```

elseif 与 else if 只有在类似上例中使用花括号的情况下才认为是完全相同。如果用冒号来定义 if/elseif 条件，那就不能用两个单词的 else if，否则 PHP 会产生解析错误
```
<?php

/* 不正确的使用方法： */
if($a > $b):
    echo $a." is greater than ".$b;
else if($a == $b): // 将无法编译
    echo "The above line causes a parse error.";
endif;


/* 正确的使用方法： */
if($a > $b):
    echo $a." is greater than ".$b;
elseif($a == $b): // 注意使用了一个单词的 elseif
    echo $a." equals ".$b;
else:
    echo $a." is neither greater than or equal to ".$b;
endif;

?>
```
6. exit() or die()程序终止执行
```
exit("程序终止执行！！！");
```

7.is_numeric($num1)判断是否为数值类型

8.error_reporting(E_ALL &~ E_NOTICE);


9.for循环
```
for ($i = 1; $i < 0; $i++){

}

echo $i, "<br/>";//1，因為for循環沒有走$i++;
```

- 验证码
```
for ($k = 0; $k < 4; $k++){
    echo '<span style="color:rgb('.mt_rand(0, 255).', '.mt_rand(0, 255).', '.mt_rand(0, 255).')">'.mt_rand(0, 9).'</span>';
}
```

2017年07月10日 星期一

1.goto语句

- 基本应用
```
echo "starting...<br/>";
goto TEST;
echo 'this is a test<br/>';
TEST://TEST标识符
echo 'hello world<br/>';
```

- goto不能跳入循环，switch...case函数和类
```
goto TEST;
for ($i = 1; $i <= 5; $i++){
    echo $i, '<br/>';
    TEST:
    echo 'hello world<br/>';
}
//Fatal error: 'goto' into loop or switch statement is disallowed in /Library/WebServer/Documents/php/05liuChengKongZhi/01.php on line 4
```

- goto可以跳出循环
```
for ($i = 1; $i <= 5; $i++){
    echo $i,'<br/>';
    if ($i == 3){
        goto TEST;
    }
}

TEST:
echo 'ending for to TEST<br/>';
//1, 2, 3;ending for to TEST
```

2.for循环

- 第二个表达式如有多个参数，最后一个作为判断条件
```
for ($i = 1, $j = 2, $k = 3; $i <= 5, $k <= 4; $i++, $k++){
    echo '<h2>hello world</h2>';
}//hello world  hello world

var_dump($j, $k);//2, 5
```

- 

3.函数中的变量

- 局部动态变量，函数外面无法取到值
```
function testa(){
    $a = 3;
    echo $a;
}

testa();//3

echo $a,"<br/>";//报错： Undefined variable: a
```

- 局部静态变量，程序结束才释放，但在函数内部定义的静态变量在函数外面是取不到的。
```
function testb(){
    static $b = 4;
    $b++;

    echo $b, "<br/>";
}

testb();//5
testb();//6
testb();//7

echo $b;//报错： Undefined variable: b
```

- 全局变量,如果函数想要拿到全局变量，在函数内部必须用global修饰变量
```
$a = 3;
$b = 4;

function testc(){
    echo $a, "<br/>";//Undefined variable: a
    echo $b, "<br/>";//Undefined variable: b
    //要想正确的输出$a, $b

    global $a, $b;
    echo $a, "<br/>";//3
    echo $b, "<br/>";//4
}

testc();

echo $a, "<br/>";//3
```

4.值传递和引用传递

- 值传递
```
$a = 3;
$b = 4;

function change($c){
    $c = 5;
    echo $c, "<br/>";//5
}

change($a);
echo $a, "<b/>";//3
```

- 引用传递，值类型前要加&符号
```
$d = 3;
$e = 5;

function changeByAddr(&$c){
    $c = 5;
    echo $c, "<br/>"; //5
}

changeByAddr($d);
echo $d, "<br/>"; //5
```

- 对象类型是引用类型传递的，调用对象的属性用箭头：->
```
//stdClass可以看做是PHP的一个基类
$student = new stdClass();
$student -> name = 'fang';

function addAge($obj){
    $obj -> age = 18;
}

addAge($student);

print_r($student);//stdClass Object ( [name] => fang [age] => 18 )
```

5.参数的默认值

6.可变参数列表

- func_num_args()//返回函数参数的长度,func_num_args — Returns the number of arguments passed to the function
```
function test(){
    echo func_num_args(), "<br/>";
}

test(1, 2, 3, 4, 5, 6);//6
```
- func_get_args()得到参数的所有元素
```
function test(){
    echo func_num_args(), "<br/>";
    print_r(func_get_args());//得到参数的所有元素
    //Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 )
}

test(1, 2, 3, 4, 5, 6);
```

7.参数的类型
- 参数的类型只能指定为array, 对象, callable
```
参数指定为callable类型
function test2(callable $a){
    $a();
}

function callBack(){
    logInfo('我是回调函数',false);
}

test2(callBack);//我是回调函数
```

8.可变函数

- method_exists()与is_callable()的区别在于在php5中，一个方法存在并不意味着它就可以被调用。对于 private，protected和public类型的方法，method_exits()会返回true，但是is_callable()会检查存在其是否可以访问，如果是private，protected类型的，它会返回false。
```
function test3(){
    echo 'hello world';
}

$func = test3;//$func = 'test3';

// if (is_callable($func))//检测参数是否为合法的可调用结构
if (function_exists($func)){
    $func();
}
```

9.函数的嵌套

- 函数的嵌套定义,所有的函数都是全局函数。
```
function foo(){
    function bar(){
        logInfo('bar', false);
    }
}

foo();//不调用foo下面的函数会报错，因为没有创建呢
bar();//能调用时因为所有的函数都是全局函数
```
- 函数的嵌套调用

10.递归调用



11.匿名函数
```
function test(){
    $message = "hello world";
    $say = function($str) use ($message){
        global $message; //这里根本没有作用，使用global必须是最外层声明的变量
        echo $message, '11', "<br/>";
        echo $str;
    };

    return $say;
}

$fun = test();

$fun('nihao dou');
```

12.冒泡算法

2017年07月12日 星期三

### PHP函数库

1.字符串长度函数：
```
$str1 = NULL;
logInfo(strlen($str1), false);//0

$str4 = '中';
logInfo(strlen($str4), false);//3，在UTF-8的环境下一个汉字是3个字节，如果想对中文进行操作，可以用mbstring函数库
```

2.字符串的大小写转换
- strtoupper：
- strtolower
- ucfirst：字符串的首字母转成大写
- ucwords：字符串的每个字母的首字母转成大写
```
$str3 = "this is a test";
logInfo(ucfirst($str3), false);//Thi is a test
logInfo(ucwords($str3), false);//Thi Is A Test
```

3.字符串替换函数

- str_ireplace(targetStr, reStr, target)，替换掉所有元素，不区分大小写
```
$str = "javascript";
echo str_replace('a', 'b', $str);//jbvbscript
```
- str_replace区分大小写

4.字符串的加密-md5

5.str_shuffle:打乱字符串
```
//打乱字符串
$str = "12345678910";
$str = str_shuffle($str);

logInfo(substr($str, 0, 4), false);//可用来制作验证码
```

6.substr(str, start, [length]):截取字符串,如果省略长度
则返回从start至字符结尾之间的字符串
```
$str = "javascript";

//从第0位开始截取到位置4，但不包含位置4的字符
logInfo(substr($str, 0, 4), false);//java

//返回位置4开始到结尾的所有字符
logInfo(substr($str, 4), false);//script

//倒数
logInfo(substr($str, -2), false);//pt

//
logInfo(substr($str, -5, -2), false);//cri
```

7.删除空格或其他字符相关函数

- trim(str, delChar)删除字符串开始位置的空格或其他字符,

8.字符串转实体函数



9.字符串翻转函数

- strrev(str)

10.字符串位置

- strpos(str, char)返回一个字符在字符串中第一次出现的位置,如果没有出现则返回bool值false

- stripos和上面的方法相同，但忽略大小写

- strstr(),返回剩余的字符
```
$str1 = "abcdef";
$str2 = 'c';

logInfo(strstr($str1, $str2), false);//cdef
```

- strrchr 将搜索字符串在另一字符串中最后一次出现的位置,包含这个字符
```
$str1 = "abccdcef";
$str2 = 'c';

logInfo(strrchr($str1, $str2), false);//cef
```

- stristr 不区分大小写

- strrev字符串的翻转
```
logInfo(strrev('1234'), false);//4321
```

11.字符串拆分和拼接函数

- array explode(string $delimiter , string $string [, int $limit ])使用一个字符串分割另一个字符串

- string implode(string $glue , array $pieces) 将一个一维数组的值转化为字符串
```
$arr2 = ["Tom", "John", "Rose"];
$str2 = implode(',',$arr2);
logInfo($str2, false);//Tom,John,Rose
```

12.字符串格式化函数

- sprintf()

如果%号多余arg参数，则必须使用占位符。占位符位于%符号之后，由数字和\$组成
```
$number = 123;
$txt = sprintf("带有两位小数的结果是:%1\$.5f,<br/>不带小数的是:%1\$d", $number);
logInfo($txt, false);//带有两位小数的结果是:123.00000,
不带小数的是:123
```

13.strrpos 计算指定字符串在目标字符串中最后一次出现的位置
```
echo strrpos('fang', 'a'), '<br/>';
```

14.strripos 计算指定字符串在目标字符串中最后一次出现的位置（不区分大小写）
```
echo strripos('fAang', 'a'), '<br/>'; //2
```

2017年07月13日 星期四 

### PHP数学函数

1.取整函数

- 向下取整:floor()
```
$x = 4.7;
logInfo(floor($x), false);//4
```
- 向上取整:ceil()
```
$y = 3.2;
logInfo(ceil($y), false);//4
```

2.最大值最小值

-max(array)/min(array)

3.幂运算和平方根

- number pow ( number $base , number $exp ) 幂运算

- float sqrt ( float $arg ) 平方根


4.随机数

- rand(min, max)

- m_rand(min, max)

5.浮点数四舍五入

- float round (float $val [lentg])
```
$x = 7.845;
logInfo(round($x), false);//8
logInfo(round($x, 2), false);//7.85
```

6.浮点数余数 

- float fmod ( float $x , float $y )
```
echo fmod(7.8, 3), "<br/>";//1.8
echo 7.8 % 3, "<br/>";//整数余数的操作//1
```

7.数字格式化

- number_format 以千位分隔符方式格式化一个数字
```
$x = 7895.56;
logInfo(number_format($x), false);//7,896
logInfo(number_format($x, 2), false);//7,895.56
```

8. strtotime(string $time [, int $now = time() ] )将任何字符串的日期时间描述解析为 Unix 时间戳

对应的参数：

- time:time：
日期/时间字符串。正确格式的说明详见 日期与时间格式。

- now：用来计算返回值的时间戳。
### PHP日期时间函数库

1.日期格式化函数

- date()格式化一个本地时间／日期

2.获取时间的相关信息

- getdate()取得日期／时间信息,得到的是毫秒数，如果不传参的话类似于time()



3.时区设置

- date_default_timezone_set("Asia/shanghai"); 

- date_default_timezone_get() 取得一个脚本中所有日期时间函数所使用的默认时区

```
logInfo(date_default_timezone_get(), false);//Asia/shanghai
```

4.生成唯一ID

- uniqid 
```
//uuid 8-4-4-4-12 = 32
logInfo(md5(uniqid(microtime().mt_rand())));
```

5.获取时间戳和微秒数

- microtime()返回当前 Unix 时间戳和微秒数
如果给出了 get_as_float 参数并且其值等价于 TRUE，microtime() 将返回一个浮点数。
```
logInfo(microtime(true), false);//1499924809.3547
```

6.字符串转时间戳

- strtotime()
```
echo strtotime('-3 weeks'), '<br/>';
logInfo(date('Y-m-d H:i:s', strtotime('last day of -1 months')),false);//某月第一天
logInfo(date('Y-m-d H:i:s', strtotime('first day of -1 months')),false);//某月最后一天
```

### 数组

1.php中的数组属于符合类型

2.数组的分类

- 索引数组：数组的下标是数字

- 关联数组：数组的下标是字符

注意：PHP中的数组其实是不区分索引还是关联数组，都是根据键名找值的

3.定义数组
- 通过array()创建
```
1.测试数组键名的，null会转为空字符串
$arr=array(
  3=>'a',
  'username'=>'king',
  5.6=>'b',
  true=>'c',
  false=>'d',
  null=>'e'
);
var_dump($arr);
echo '<hr/>';

2.如果下标重复，后面的覆盖前面的值
$arr=array(
  'a',
  0=>'b'
);
var_dump($arr);
echo '<hr/>';

3.如果新添加元素没有指定下标，它的下标为已有下标最大值加1（已有下标不全为负数）
$arr=array(
'a','b','c',
  5=>'d',
  19=>'e',
  'f'
);
var_dump($arr);
echo '<hr/>';

4.如果已有下标都为负数，那么新添加元素的下标从0开始
$arr=array(
  -12=>'a',
  -43=>'b',
  'c'
);
var_dump($arr);

5.PHP5.4之后
$arr=['a','b','c'];
print_r($arr);
$arr=[
3=>'a',
5=>'b',
'username'=>'king'
];
print_r($arr);

6.二维中最重要的形式是二维索引+关联的形式(数据库中查询出的记录就是这种形式)
$arr=array(
  array(
    'id'=>1,
    'username'=>'king'
  ),
  array(
    'id'=>2,
    'username'=>'queen'
  )
);
```


- 通过[]动态创建
```
1.动态创建下标连续的索引数组
$arr1[]=12;
$arr1[]=45678.9;
$arr1[]=true;
print_r($arr1);

2.手动指定下标的索引数组
$arr2[3]=45;
$arr2[-56]=-12;
$arr2[0]='hello world';
$arr2[]='this is king show time';
print_r($arr2);

3.动态创建关联数组
$desc='this is a test';
$userInfo['username']='king';
$userInfo['age']=12;
$userInfo['desc']=$desc;
$userInfo[12]='aaaa';
$userInfo[]='bbb';
print_r($userInfo);

4.二维的索引+关联
$arr3[]=['id'=>1,'username'=>'king1','age'=>12];
$arr3[]=['id'=>2,'username'=>'king2','age'=>12];
$arr3[]=['id'=>3,'username'=>'king3','age'=>12];
$arr3[]=['id'=>4,'username'=>'king4','age'=>12];
print_r($arr3);

5.二维关联+关联
$arr4['course']=['courseName'=>'php','courseDesc'=>'PHP is the best language'];
print_r($arr4);
$arr5[][][][][]=1;
print_r($arr5);
```
- 通过range和compact快速创建
```
1.range()快速创建下标连续的索引数组
$arr=range(1,10);
print_r($arr);
$arr=range(-10,5);
print_r($arr);

2.手动指定步长的数组
$arr=range(1,10,2);
print_r($arr);//1, 3, 5, 7, 9

3.输出a-z
$arr=range('a','z');//97~122
print_r($arr);

echo '<hr/>';
for($i=97;$i<=122;$i++){
  $arr1[]=chr($i);
}
print_r($arr1);
echo '<hr/>';

4.通过compact创建数组的时候，只能写已经存在的变量的名称，不需要加$
$a=12;
$b=false;
$c=null;
$userInfo3=compact('a','b','c');
print_r($userInfo3);
```
- 通过define()定义常量数组（PHP7）
```
1.const在5.6之后可以定义常量
const ARR1=array('a','b','c');
print_r(ARR1);
const ARR2=[
  'a'=>'aa',
  'b'=>'bb' 
];
print_r(ARR2);

echo '<hr/>';

2.通过define()定义常量数组
define('TEST1',array('a','b','c'));
print_r(TEST1);
define('TEST2',['d','e','f']);
print_r(TEST2);

define('CUSTOM_UPLOAD_ERRORS',[
  'ext_error'=>'上传文件扩展名不符合规范',
  'maxsize_error'=>'上传文件大小不符合规范'
]);
print_r(CUSTOM_UPLOAD_ERRORS);
echo '<hr/>';
echo CUSTOM_UPLOAD_ERRORS['ext_error'];
```

4.使用数组

- 原则：根据键名找键值
```
1.查找元素
$arr=[
  'username'=>'king',
  'age'=>12,
  'email'=>'382771946@qq.com'
];
echo '用户名为：',$arr['username'],'<br/>';

2.二维的索引+关联
echo '<hr/>';
$users[]=['id'=>1,'username'=>'king1','age'=>21];
$users[]=['id'=>2,'username'=>'king2','age'=>51];
$users[]=['id'=>3,'username'=>'king3','age'=>11];
echo $users[1]['username'];

3.向数组中添加元素
$arr=['a','b','c'];
$arr[]='d';//索引3
$arr['test']='this is a test';
print_r($arr);

4.更新操作
$arr[3]='dddd';
print_r($arr);

5.删除指定元素
unset($arr['test']);
print_r($arr);

6.针对于二维数组的操作：增删改查操作
$courses[]=['id'=>1,'courseName'=>'php','courseDesc'=>'PHP是最好的语言'];
$courses[]=['id'=>2,'courseName'=>'javascript','courseDesc'=>'javascript是最好的语言'];
$courses[]=['id'=>3,'courseName'=>'go','courseDesc'=>'go是最好的语言'];
echo $courses[0]['courseName'];

//更新
$courses[1]['courseName']='js';
echo $courses[1]['courseName'],'<br/>';

//删除
unset($courses[2]['courseName']);
print_r($courses);
```

5.其他类型转数组
```
1.临时转换
$var = 123;//0 => int 123
$var = 12.3;//0 => float 12.3
$var = false;//0 => boolean false
$var = 'fang';//0 => string 'fang' (length=4)
$var = null;//转换成空数组empty
$res = (array)$var;
var_dump($res);

2.永久转换：settype
$var = 123;
settype($var,'array');
var_dump($var);//0 => int 123
```

6.数组运算符的使用
```
1.合并数组，如果数组键名相同，只会使用左边数组元素的值
$arr1=['a','b','c'];
$arr2=['d','e','f'];
$newArr=$arr1+$arr2;
print_r($newArr);//a, b, c

2.== 比较数组的键名和键值是否相同，如果相同返回true，否则返回false
=== 既要比较键名和键值是否相同，而且顺序也要相同
$a=[
  3=>'a',
  '5'=>true
];
$b=[
  5=>1,
  '3'=>'a'
];
$c=[
  '3'=>'a',
  '5'=>1
];
var_dump($a==$b,$a===$b,$a==$c,$a===$c);//true, false, true, false
```

2017年07月14日 星期五

### 数组应用

1，count 计算数组中的单元数目，或对象中的属性个数,如果 array_or_countable 不是数组类型或者没有实现 Countable 接口的对象，将返回 1。 有个例外：如果 array_or_countable 是 NULL 则结果是 0。
```
$arr = range('d', 'z');
//for循环只能遍历下标连续的索引数组
for($i=0,$count=count($arr)-1;$i<=$count;$i++){
  echo $arr[$i],'<br/>';
}
```

2.一般我们用foreach的方式遍历数组
```
foreach分为两种形式
只要键值的情况
foreach($数组名称 as $val){
循环体;
}
既要键名又要键值的情况
foreach($数组名称 as $key=>$val){
  循环体;
}

$arr=[//for无法遍历这样的数组
   5=>'a',
   12=>'b',
   -123=>'c',
   34=>'d'
 ];

 foreach ($arr as $value){
    logInfo($value, false);
 }

 foreach($arr as $key=>$value){
     logInfo($key, false);
     logInfo($value, false);
 }
```

留言板
```
file_get_contents($file);//将整个文件读入一个字符串，返回的是字符串
file_put_contents($file, $str);//向指定文件写内容，内容只能是字符串
serialize($str);//对字符串进行序列化，写入内容
unserialize();//反序列化，读取内容
isset($var);//检测变量是否设置
strip_tags($str);//从字符串中去除 HTML 和 PHP 标记
```

2017年7月15日 星期六

1.foreach遍历数组和对象，如果不是数组或者对象会报警告，通过@符号无法抑制错误
```
$arr='asdfsa';

foreach($arr as $v){
echo 'this is a test';
}
```

2017年07月17日 星期一

1.html中的所有php语法都要用<?php?>包裹
```
<?php
    foreach($users as $user){
?>
    <tr>
        <td><?php echo $user['id']?></td>
        <td><?php echo $user['userName']?></td>
        <td><?php echo $user['age']?></td>
        <td><?php echo $user['email'] ?></td>
    </tr>
<?php
    }
?>
```

2017年7月24日 星期一

1.数组指针遍历数组

- key($arr)//得到当前指针所在位置的键名

- current($arr)得到当前指针所在位置的键值

2017年07月30日 星期日

1.session_start启动新会话或者重用现有会话

2.

2017年08月01日 星期二

1.react中select不能用selected指定默认选中的值，需要用value指定







2017年08月03日 星期四

1.如何使用PHP去操作MySql

- 命令行方式连接数据库
	1.命令行中输入mysql -uroot -p或者mysql -uroot -p+密码
	2.输入密码
	3.退出数据库：exit/quit,注意不要加分号

2.查看mysql版本  
mysql -V

3.登录的同时打开指定的数据库：
```
mysql -uroot -p -D db_name(数据库的名称)
```

4.一些简单的命令

select database();产看打开的数据库  

命令行结束符默认使用;或者\g来结束；  

select version();获取mysql的版本号  

select now(）返回当前的时间  

5.数据库相关操作

- 创建数据库：CREATE (DATABASES|SCHEMA) db_name;

- 不存在再创建：CREATE DATABASE [IF_NOT_EXISTS] db_name;

- 产看当前服务器下全部的数据库：SHOW DATABASE|SCHEMAS;

- 查看上一步操作的警告信息 SHOW WARNINGS;

- 在创建数据库的同时指定编码方式：CREATE_DATABASE[IF_NOT_EXISTS] db_name[DEFAULT] CHARACTER SET [=]charset;

- 查看指定数据库的详细信息：SHOW_CREATE DATABASE db_name;

- 修改指定数据库的编码方式：ALTER DATABASE db_name DEFAULT CHARACTER SET ‘UTF-8’;

- 打开指定数据库USE db_name;

- 得到当前打开的数据库：SELECT DATABASE()|SCHEMA();

- 删除指定的数据库： DROP DATABASE db_name;

- 如果数据库存在则删除：DROP DATABASE [IF EXISTS] db_name;

6.数据表相关操作。

- 数据表是数据库最重要的组成部分，数据是保存在数据表中。每个数据表中至少有一列，行可以有零行或者多行。表名要求唯一，不要包含特殊字符，最好含义明确。

- 创建表：CREATE TABLE [IF_NOT_EXISTS] tbl_name(
	字段名称 字段类型 [完整性约束条件],
	字段名称 字段类型 [完整性约束条件]
)ENGINE=存储引擎 CHARSET=编码方式;

7.MYSQL中的数据类型：整数类型；浮点类型；定点类型；

8.查看数据库下已有数据表：SHOW TABLES;

9.查看指定数据表的详细信息：SHOW_CREATE TABLE btl_name;

#### 常量
1.PHP中的常量分为两种，一种是自定义的，一种是系统的。自定义常量一般通过define()函数来定义。

2.常量主要功效是可以避免重复定义，篡改变量值

3.系统常量有：
- __FILE__ :php程序文件名。它可以帮助我们获取当前文件在服务器的物理位置
- __LINE__ :PHP程序文件行数。它可以告诉我们，当前代码在第几行
- PHP_VERSION:当前解析器的版本号。它可以告诉我们当前PHP解析器的版本号，我们可以提前知道我们的PHP代码是否可被该PHP解析器解析
- PHP_OS：执行当前PHP版本的操作系统名称。它可以告诉我们服务器所用的操作系统名称，我们可以根据该操作系统优化我们的代码

4.PHP常量如何取值
- 使用常量名直接获取
- 使用constant()函数。优点是可以动态的输出不同的常量，在使用上要灵活、方便，其语法格式如constant(const).例子如下，注意变量要用引号包裹起来
```
define("PI", 3.14);
    $r = 1;
    $area = constant("PI")*$r*$r;
    echo $area;
```
5.如何判定常量是否被定义
格式为：bool defined(string constants_name)

#### PHP常用的运算符

1.字符串的连接符--点
```
echo "总分：".$sum."<br/>"
```

2.PHP中的赋值运算符。
- 分两种，一种“=”把右边表达式的值赋给左边的运算数。它将右边表达式值复制一份，交给左边的运算数。换而言之，首先给左边的运算数申请了一块内存，然后把复制的值放到这个内存中。第二种“&”意味着两个变量都指向同一个数据。它将使两个变量共享一块内存
```
$a = "我在慕课网学习";
$b = $a;
$c = &$a;
$a = "你以为这是真的吗";
echo $b."<br/>";//我在慕课网学习
echo $c;//你以为这是真的吗
```

3.逻辑运算符
- 逻辑与and或者&&,但前者要注意优先级，使用的时候要用括号包裹
- 逻辑或or或者||，但前者要注意优先级，使用的时候要用括号包裹
- 逻辑异或xor表示只能有奇数为真才为真
- 逻辑非！

4.字符串连接运算符
- 连接运算符(“.”)：它返回将右参数附加到左参数后面所得的字符串。
- 连接赋值运算符(“.=”)：它将右边参数附加到左边的参数后，类似c+=b;
## 说明
如果对您有帮助，您可以点右上角 "Star" 支持一下 谢谢！ ^_^

或者您可以 "follow" 一下，我会不断开源更多的有趣的项目
## 个人简介
作者：房飞跃

博客地址：[前端网](http://www.qdfuns.com/house/31986/note)  [博客园](https://www.cnblogs.com/fangfeiyue)  [GitHub](https://github.com/fangfeiyue)

职业：web前端开发工程师

爱好：探索新事物，学习新知识

座右铭：一个终身学习者

## 联系方式
坐标：北京

QQ：294925572

微信：

![XinShiJieDeHuHuan](http://note.youdao.com/yws/public/resource/c2361265179a03449f6d52397fd50033/xmlnote/100D55934BB446839482D3EA0CDC3E8D/17820)

## 赞赏
觉得有帮助可以微信扫码支持下哦，赞赏金额不限，一分也是您对作者的鼎力支持

![微信打赏](http://note.youdao.com/yws/public/resource/c2361265179a03449f6d52397fd50033/xmlnote/D77744C8EC944CF6AA232272CBC5CF6D/17828)

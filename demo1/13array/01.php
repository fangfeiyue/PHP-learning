<?php
date_default_timezone_set('prc');
header('content-type:text/html;charset=utf-8');

function logInfo($param=false, $flag = true){
    if (!$param){
        echo '<br/>';   
    }else{
        if ($flag){ 
            echo $param, '<br/>';
        }else{
            print_r($param);
        }
    }
}


logInfo(array(), false);

// 检测变量是否是数组
logInfo(is_array(array())); //1



logInfo(array(1, 32, 34, 'string', 'test'), false);


// 手动指定下标
logInfo(
    array(
        3=>'a', 
        'fang'=>'飞跃'
    ), false);



// 关联数组
$userInfo = array(
    'userName'=>'fangfeiyue',
    'age'=>12,
    'email'=>'294925572@qq.com',
    'salary'=>10000
);

logInfo($userInfo['userName']);





// 如果下标重复，后面的覆盖前面的值
$arr = array(
    'a',
    0=>'b'
);

var_dump($arr);





// 新添加的元素没有指定下标，它的下标为已有元素最大值
$arr = array(
    'a', 'b', 'c',
    5=>'d',
    19=>'e',
    'f'
);

logInfo();
var_dump($arr);





// 创建多维数组
$arr = [[
    'name'=>'fang',
    'age'=>18
],[
    'name'=>'dou',
    'age'=>18
]];

logInfo($arr, false);
// 获取二维数组中的指定元素
logInfo($arr[0]['name']);



$arr = [[
    0, 
    1,
    2, 
    3, 
    4
],'name'=>[
    'li',
    'zhao',
    'wang',
    'zhang'
],'age'=>[
    18, 
    38,
    43,
    45
]];

logInfo($arr, false);
logInfo($arr['name'][0]);




// 通过range快速创建索引数组
logInfo(range(0, 10), false);
logInfo(range(-10, 5), false);
logInfo(range(1, 10, 2), false);
logInfo(range('a', 'z'), false);

for ($i = 97; $i < 123; $i++){
    $arr1[] = chr($i);
}
logInfo('无知无畏');
logInfo($arr1, false);
logInfo('我是华丽的分割线');
$arr2 = [1, 2, 3, 4];
logInfo($arr2, false);
$arr2[]=10;
logInfo($arr2, false);





// 通过compact快速创建关联数组
$age = 18;
$userName = "fangfeiyue";
$email = "294925572@qq.com";

logInfo(compact('userName', 'age', 'email'), false);




// define定义数组
const ARR = [0, 1, 2, 3, 4];
logInfo(ARR, false);
define('TEST','I am test');
logInfo(TEST, false);
logInfo(defined('TEST'), false);




// 删除指定元素
$arr = range(1, 10);
logInfo($arr, false);
unset($arr[0]);
logInfo($arr, false);





$arrr[] = ['name'=>'fang', 'age'=> 18, 'email'=>'294925572@qq.com'];
$arrr[] = ['name'=>'fang', 'age'=> 18, 'email'=>'294925572@qq.com'];
$arrr[] = ['name'=>'fang', 'age'=> 18, 'email'=>'294925572@qq.com'];
$arrr[] = ['name'=>'fang', 'age'=> 18, 'email'=>'294925572@qq.com'];
logInfo($arrr, false);
unset($arrr[0]['name']);
logInfo($arrr, false);






// 合并数组
$arr = [1, 2, 3, 4,5];
$arr1 = [ 6, 7, 8, 9, 10, 12, 3, 2];
logInfo($arr + $arr1, false);





// 遍历数组
$arr = range('a', 'z');
// 通过for循环
for ($i = 0; $i < count($arr); $i++){
    echo $arr[$i], '<br/>';
}
// 通过foreach遍历数组

echo '下面是foreach的输出结果,<br/>';
foreach($arr as $item){
    echo $item, '<br/>';
}
echo '<br/>';
foreach($arr as $key=>$item){
    echo $key, $item, '<br/>';
}


// foreach遍历二维数组
$arr = [[
    'name'=>'fang'
],[
    'name'=>'dou'
]];
foreach($arr as $value){
    foreach($value as $item){
        echo $item,'<br/>';
    }
}

$array = [0, 1, 2];
foreach ($array as &$val) {
    // 返回数组中的当前单元
    var_dump(current($array));
}

$transport = array('foot', 'bike', 'car', 'plane');
$mode = current($transport); // $mode = 'foot';
var_dump($mode); // foot





// 通过数组指针遍历数组
$arr = [23, 4, 435, 23, 12, 53];
echo '当前指针所在位置元素的键名为'.key($arr).'<br/>';
echo '当前指针所在位置元素的键值为'.current($arr).'<br/>';


$arr = [
    'a', 'b', 'c',
    35=>'test',
    46=>0, //当为假的时候如果while中的条件是current()，数组下面的元素就不再输出了
    'username'=>'zhang',
    'age'=>12
];

while(current($arr)){
    echo key($arr), current($arr).'<br/>';
    next($arr);
}

echo '<hr/>';

while(!is_null(key($arr))){
    echo key($arr), current($arr).'<br/>';
    next($arr);
}

// 通过each()和


// list()遍历数组
echo '<hr/>';
$arr = ['a', 'b', 'c'];
list($var1, $var2, $var3) = $arr;
echo $var1, $var2, $var3.'<br/>';

echo '<hr/>';
$foo = array("bob", "fred", "jussi", "jouni", "egon", "marliese");
$bar = each($foo);
print_r($bar);

echo '<hr/>';
$arr = [23, 3,4, 45, 456, 556];
while (list($key, $value)=each($arr)){
    echo $key.'==>'.$value.'<br/>';
}










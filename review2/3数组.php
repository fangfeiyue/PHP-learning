<?php
header('content-type:text/html;charset=utf-8');

function echoStr($str){
  echo $str,'<br/>';
}

# 数组的种类

# 下标数组
$people = array("fag", 1, false);
echoStr($people[2]);

$people2 = ['f', 'g', 'd', 'p'];
echoStr($people2[2]);

# 添加内容到数组
$people2[] = 's';
$people2[5] = 'z';
$people2[] = false;
echoStr($people2[4]);

# 计算个数方法
echoStr(count($people2));

# 数组打印方法
print_r($people2);
var_dump($people2);

# 关联数组
$people3 = array("f"=>1, "a"=>2, "n"=>5);
var_dump($people3);
echoStr($people3['f']);

# 添加内容到关联数组
$people3['dou'] = 20;
print_r($people3);

# 多维数组
$cars = [['name', 'sex', 'hjh'], ['name1', 'sex1', 'hjh1'], ['name2', 'sex2', 'hjh2']];
echoStr($cars[2][2]);
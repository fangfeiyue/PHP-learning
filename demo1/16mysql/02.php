<?php
date_default_timezone_set('prc');
header('content-type:text/html;charset=utf-8');

function mysqlInit($host, $userName, $password, $dbName){
    // 面向过程方式连接数据库
    $connect = mysqli_connect($host, $userName, $password, $dbName) or die('数据库连接失败');

    // 设置字符集
    mysqli_query($connect, 'set names utf8');
    
    // 执行sql语句
    
    // 插入数据
    // $result = mysqli_query($connect, "insert into users values(null, 'fang', '10000000')");
    // $result = mysqli_query($connect, "insert into users values(null, 'dou', '10000000')");

    // 删除数据
    // $result = mysqli_query($connect, 'UPDATE users SET money=2000000 WHERE id=1');

    // 查找数据
    $result = mysqli_query($connect, 'SELECT * FROM users');

    // 获取结果集 
    return mysqli_fetch_all($result, MYSQL_ASSOC);
}

$data = mysqlInit('localhost', 'root', 'root', 'my mall');

var_dump($data[0]);
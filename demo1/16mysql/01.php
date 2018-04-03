<?php
date_default_timezone_set('prc');
header('content-type:text/html;charset=utf-8');


// 测试数据库的连接

$user = 'root';
$password = 'root';
$db = 'test1';
$host = 'localhost';
$port = 3306;

$link = mysqli_init();
$success = mysqli_real_connect(
   $link, 
   $host, 
   $user, 
   $password, 
   $db,
   $port
);





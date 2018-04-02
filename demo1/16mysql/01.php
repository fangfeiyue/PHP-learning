<?php
date_default_timezone_set('prc');
header('content-type:text/html;charset=utf-8');

// $user = 'root';
// $password = 'root';
// $db = 'inventory';
// $host = 'localhost';
// $port = 3306;

// // 连接数据库
// $link = mysql_connect($host, $user, $password);

// if (!$link){
//     die('Could not connect'.mysql_error());
// }

// // 关闭数据库连接
// mysql_close($link) ;




// $user = 'root';
// $password = 'root';
// $db = 'inventory';
// $host = 'localhost';
// $port = 3306;

// $link = mysql_connect(
//    "$host:$port", 
//    $user, 
//    $password
// );
// // $db_selected = mysql_select_db(
// //    $db, 
// //    $link
// // );
// mysql_close($link);





$user = 'root';
$password = 'root';
$db = 'inventory';
$socket = 'localhost:/Applications/MAMP/tmp/mysql/mysql.sock';

$link = mysql_connect(
   $socket, 
   $user, 
   $password
);

mysql_close($link);

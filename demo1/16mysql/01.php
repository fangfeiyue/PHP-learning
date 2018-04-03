<?php
date_default_timezone_set('prc');
header('content-type:text/html;charset=utf-8');

/**
 * 数据库初始化操作
 *
 * @param [type] $host
 * @param [type] $userName
 * @param [type] $password
 * @param [type] $dbName
 * @return void
 */
function mysqlInit($host, $userName, $password, $dbName){
    // 连接数据库
    $link = mysql_connect($host, $userName, $password) or die('数据库连接失败');

    // 选择数据库
    mysql_select_db($dbName) or die('选择的数据库不存在');

    // 设置字符集
    mysql_set_charset('urf8');

    // 关闭数据库连接
    mysql_close();
}

mysqlInit();


// mysql方式执行sql语句

// 发送一条 MySQL 查询,对insert、update、delete、drop等操作成功后返回true，失败返回false
// 添加数据
$result = mysql_query("INSERT INTO USERS VALUES(NULL, 'fang', '1000000000')");

// 修改数据
$result = mysql_query("UPDATE USERS SET MONEY=20000000000 WHERE id=3");

// 删除单条数据
$result = mysql_query("DELETE FROM users WHERE id=3");

// 删除数据表
$result = mysql_query("DROP TABLE test");




// mysql方式获取结果集
$result = mysql_query("SELECT * FROM USERS");
// mysql_fetch_array($result, MYSQL_NUM);

while($line = mysql_fetch_array($result, MYSQL_NUM)){
    $data[] = $line;
}




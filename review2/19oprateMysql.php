<?php
header("content-type:text/html;charset=utf-8");

$mySqli = new mysqli("localhost", "root", "root", "person");

if (!$mySqli->connect_errno) {
  echo "数据库连接成功";
}else {
  echo "数据库连接失败";
  die($mySqli->connect_error);
}

$mySqli->query("set names utf-8");
$result = $mySqli->query("SELECT * from students");

if ($result) {
  $row = $result->fetch_all(MYSQLI_ASSOC);
  echo json_encode($row);
}

$mySqli->close();

<?php
date_default_timezone_set("Asia/Shanghai");
header("content-type:text/html;charset=utf-8");

function operateMySql($sql) {
  $mysqli = new mysqli("localhost", "root", "root", "person");
  
  if (!$mysqli->connect_errno) {
    echo "<br/>数据库连接成功<br/>";
  }else {
    echo "<br/>数据库连接失败<br/>";
    die($mysqli->connect_error);
  }

  $result = $mysqli->query($sql);

  if ($result){
    // while($row = $result->fetch_row()) {
    //   print_r($row);
    //   echo "<hr/>";
    // }

    // while($row = $result->fetch_array(MYSQLI_ASSOC)) {
    //   print_r($row);
    //   echo "<hr/>";
    // }

    $row = $result->fetch_all(MYSQLI_ASSOC);
    echo json_encode($row);
    
    echo "<br/>查询完毕<br/>";
  }else {
    echo "<br/>查询失败<br/>";
  }

  $mysqli->close();
}

operateMySql("select * from students");


echo date("h:i:s");
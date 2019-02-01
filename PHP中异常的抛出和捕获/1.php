<?php
date_default_timezone_set("PRC");
header("content-type:text/html;charset=utf-8");

// $fd = open(test.txt);
// $text = read($fd);
// echo $text;
// write($fd, "hello world");
// close($fd);


try {
  $result = 1 > 2;
  if (!$result) throw new Exception("111");
}catch(Exception $e){

  echo "error...";
}finally{
  echo "finally";
}

echo '继续执行';













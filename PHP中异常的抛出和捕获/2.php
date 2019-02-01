<?php
date_default_timezone_set("PRC");
header("content-type:text/html;charset=utf-8");

try {
  throw new Exception("失败");
}catch(Exeption $e) {
  echo $e->getMessage();
}finally {
  echo "关闭";
}




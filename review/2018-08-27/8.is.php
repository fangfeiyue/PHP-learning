<?php
header("content-type:text/html;charset=utf-8");

function strongEcho($content, $isVarDump=false) {
  if (!$isVarDump) {
    echo "$content<br/>";
  }else {
    var_dump($content);
  }
}

strongEcho(is_int('123king'), true);
// 检查是否为标量类型
strongEcho(is_scalar(array()), true);
$arr = [1, 2, 3, 4, "fang"];
strongEcho(is_scalar($arr), true);
strongEcho(is_scalar(123), true);


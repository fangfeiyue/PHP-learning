<?php
header('content-type:text/html;charset=utf-8');

function strongEcho($content, $isVarDump=false) {
  if (!$isVarDump) {
    echo "$content<br/>";
  }else {
    var_dump($content);
  }
}

$str = '12345';
strongEcho($str{1});

$str[0] = 'fangfeiyue';

strongEcho($str);

$str = <<<GOD
我是一只猫咪呀，米亚米亚米.
我要去呀抓老鼠，抓呀抓老鼠.
GOD;

strongEcho($str);


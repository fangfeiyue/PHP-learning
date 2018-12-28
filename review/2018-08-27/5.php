<?php
function strongEcho($content, $isVarDump=false) {
  if (!$isVarDump) {
    echo "$content<br/>";
  }else {
    var_dump($content);
  }
}

$str = '123456';

strongEcho($str[1]);
strongEcho($str{0});
strongEcho($str{0}='2');
strongEcho($str{6}='2');
strongEcho($str);


$str = 'fang';
// 输出首字母
strongEcho($str[0]);
strongEcho($str);
// 将字符串中的n变成o
strongEcho($str[2]='0');
strongEcho($str);
// 将字符串中的a删除
strongEcho($str{0}=" ");
strongEcho($str);
// 在字符串末尾添加一个！
strongEcho($str[4]='!');
strongEcho($str);


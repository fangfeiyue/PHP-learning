<?php
header('content-type:text/html;charset=urf-8');

function test_echo() {
  $i = 'j';
  $j = 'k';
  $k = 'hello world';
  echo $$$i;
}

test_echo();

function test_var_dump($param) {
  echo '<br/>';
  var_dump($param);
  echo '<br/>';
}

test_var_dump('1234567');
test_var_dump(['1', 2, bool]);

function test_varible() {
  $_a = '<br/>hello world<br/>';
  echo $_a;
  $人名 = '<br/>LiMing<br/>';
  echo $人名;
}

test_varible();

test_var_dump(10);
test_var_dump(0123);
test_var_dump(10);

function test_str() {
  $userName = 'fangfeiyue';
  echo "$userName<br/>";
  echo '$userName<br/>';
  echo "He said I'm Fine";
}

test_str();

function strongEcho($content) {
  echo "<br/>$content<br/>";
}

// 测试转移符
function test_character() {
  $str = 'He said "I\'m Fine"';
  strongEcho($str);
  strongEcho('!\r@\n#\t%1\\b\'\$de');
  strongEcho("!\r@\n#\t%1\\b\"\$de");
  strongEcho("{$str}");
  strongEcho('{$str}');
}

test_character();

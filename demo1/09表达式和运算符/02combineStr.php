<?php
header('content-type:text/html;charset=utf-8');
// 字符连接线
echo 'ab'.'cd'.'ef';

$hello = ' hello ';
$world = ' world ';
$sayContent = $hello.$world;
echo '<br/>', $sayContent, '<br/>';


$str = '123';

echo $str.='456';
<?php
date_default_timezone_set("PRC");
header('content-type:text/html;charset=utf-8');

echo date('Y年m月d日N',time()), '<br/>';
echo time(), '<br/>';
echo date('N'), date('w'), '<br/>';

$str = 'fangfeiyue';

echo "hello, ${str}";
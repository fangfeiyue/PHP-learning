<?php
header('content-type:text/html;charset=utf-8');
date_default_timezone_set('PRC');

echo '执行一';

goto TEST;
echo '执行二';

TEST:
echo '执行三';


for ($i = 0; $i < 5; $i++){
    echo $i;
}
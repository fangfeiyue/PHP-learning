<?php
header('content-type:text/html;charset=utf-8');


// 九九乘法表

for ($i = 1; $i <= 9; $i++){ // 控制行数
    for ($j = 1; $j <= $i; $j++){ // 控制列数
        echo  $j.'*'.$i.'='.($i*$j).'&nbsp;&nbsp;&nbsp;&nbsp;';
    }
    echo '<br/>';
}

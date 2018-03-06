<?php
header('content-type:text/html;charset=utf-8');
$id = 12344534;
$userName = 'FeiyueFang';
$email = '1877777@qq.com';
$tel = '187777777777';
$address = '河北省石家庄市新乐市';
$table = 
"<table border='1' width='80%' bgcolor='orange'>
    <tr>
        <td>编号</td>
        <td>用户名</td>
        <td>邮箱</td>
        <td>电话</td>
        <td>地址</td>
    </tr>
    <tr>
        <td>{$id}</td>
        <td>{$userName}</td>
        <td>{$email}</td>
        <td>{$tel}</td>
        <td>{$address}</td>
    </tr>
    <tr>
        <td>{$id}</td>
        <td>{$userName}</td>
        <td>{$email}</td>
        <td>{$tel}</td>
        <td>{$address}</td>
    </tr>
    <tr>
        <td>{$id}</td>
        <td>{$userName}</td>
        <td>{$email}</td>
        <td>{$tel}</td>
        <td>{$address}</td>
    </tr>
    <tr>
        <td>{$id}</td>
        <td>{$userName}</td>
        <td>{$email}</td>
        <td>{$tel}</td>
        <td>{$address}</td>
    </tr>
</table>";

echo $table;


//heredoc的写法
$str = <<<EOF
    $table
EOF;

echo $str;
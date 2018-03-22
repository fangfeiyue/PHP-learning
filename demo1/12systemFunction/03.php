<?php
date_default_timezone_set('prc');
header('content-type:text/html;charset=utf-8');

echo date('Y年m月d日H:i:s'), '<br/>';



// 时间戳
echo time(), '<br/>';
echo '当前的时间是', date('Y-m-d H:i:s'), '<br/>';
echo '昨天的时间是', date('Y-m-d H:i:s', time() - 86400), '<br/>';




// 字符串转时间戳
echo '三个星期之前的时间戳是---》', (time() - strtotime('-3 weeks')) / 86400,'<br/>';
echo date('Y-m-d H:i:s', strtotime('last day of -1 month')), '<br/>';
echo date('Y-m-d H:i:s', strtotime('first day of -1 month')), '<br/>';




// 获取时间戳和微秒数
echo microtime(), '<br/>';



// uuid
echo md5(uniqid(microtime().mt_rand())), '<br/>';




// 字符串转时间
function logInfo($param, $flag = true){
    if ($flag){ 
        echo $param, '<br/>';
    }else{
        print_r($param);
    }
}
logInfo(strtotime('-3 weeks'));
logInfo(date('Y-m-d H:i:m', strtotime('last day of -1 month')));




// 获取日期时间信息
logInfo(getdate()[year], false);

<?php
date_default_timezone_set('prc');
header('content-type:text/html;charset=utf-8');


$fileName = 'user3.csv';
$handle   = fopen($fileName, 'wb+');
// $data     = [
//     [1, 'php', 'php是最好的语言'],
//     [2, 'js', 'js是最火的语言']
// ];

$data = [
    ['id'=>'1', 'userName'=>'fang', 'age'=>'3'],
    ['id'=>'2', 'userName'=>'fei', 'age'=>'4'],
];

foreach ($data as $val){
    fputcsv($handle, $val);
}

fclose($handle);

print_r(file_get_contents($fileName));

strip_tags
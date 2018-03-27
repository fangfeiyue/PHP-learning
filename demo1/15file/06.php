<?php
date_default_timezone_set('prc');
header('content-type:text/html;charset=utf-8');

$fileName = 'test.csv';
$handle = fopen($fileName, 'rb+');
print_r(fgetcsv($handle));
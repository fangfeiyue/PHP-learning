<?php
header('content-type:text/html;charset=utf-8');

define('TEST', 123);
echo TEST, '<br/>';

const TEST1 = '123';
echo TEST1, '<br/>';

const TEST_ARRAY = array(1, 2, 3);
// define('TEST_ARRAY', array(1, 2, 3));
echo TEST_ARRAY, '<br/>';
var_dump(TEST_ARRAY);
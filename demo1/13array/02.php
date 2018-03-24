<?php
// 常用数组函数解析
date_default_timezone_set('prc');
header('content-type:text/html;charset=utf-8');

// 1.求字符串中字母的和
$str = "3,4,5,65,2,4,4444";
$arr = explode(',', $str);
print_r($arr);
echo array_sum($arr), '<br/>';
echo array_product($arr), '<br/>';




echo '<hr/>';
// 2.截取扩展名fjasl.txt.png.jpeg，并检测扩展名是否在['jpg', 'jpeg', 'gif', 'png']中
$str = 'fjasl.txt.png.jpegs';
$arr = explode('.', $str);
$ext = end($arr);
echo in_array ($ext, $arr);


echo '<hr/>';
$stack = array("orange", "banana", "apple", "raspberry");
$fruit = array_pop($stack);
echo $fruit; //raspberry
print_r($stack);




echo '<hr/>';
$str = join('', range(0, 10));
echo $str;



echo '<hr/>';
$arr = [1, 2, 3, 4, 5];
$arr1 = [4,5, 6,7, 8,9];
print_r(array_merge($arr, $arr1));




// array_rand
echo '<hr/>';
$arr = ['fang', 'fei', 'yue', 'jia', 'you'];
print_r(array_rand(array_flip($arr), 3));



// shuffle 打乱数组
echo '<hr/>';
$arr = ['f', 'a', 'n', 'g', 'f', 'e', 'i'];
shuffle($arr);
echo '打乱后的数组<br/>';
print_r($arr); 





// array_keys && array_values
echo '获取数组中的键名和键值';
echo '<hr/>';
print_r(array_keys($arr));
echo '<hr/>';
print_r(array_values($arr));



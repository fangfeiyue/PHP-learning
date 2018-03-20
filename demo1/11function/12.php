<?php
// 冒泡算法
date_default_timezone_set('prc');
header('content-type:text/html;charset=utf-8');

// [4, 9, 8, 6, 7, 3, 2, 1]

// $arr = [4, 9, 8, 6, 7, 3, 2, 1];

// function bullingSort($arr){
//     $checkPoint = 0;

//     while(true){
//         $swapCount = check($arr, $checkPoint);
//         $checkPoint++;

//         if ($swapCount <= 0){ 
//             return $arr;
//         }
//      }
// }

// function check(&$arr, $checkPoint){
//     $swapCount = 0;
//     for ($i = count($arr) - 1; $i > $checkPoint; $i--){
//         if ($arr[$i] < $arr[$i - 1]){
//             swap($arr, $i);
//             $swapCount++;
//         }
//     }

//     return $swapCount;
// }

// function swap(&$arr, $i){
//     $tmp = $arr[$i];
//     $arr[$i] = $arr[$i - 1];
//     $arr[$i - 1] = $tmp;
// }

// print_r(bullingSort($arr));

// $examplearr=[8,94,15,88,55,76,21,39, 1];

// function bullingSort($arr){
//     for ($i = 0; $i < count($arr) - 1; $i++){
//         for ($j = 0; $j < count($arr) - 1 - $i; $j++){
//             if ($arr[$j] > $arr[$j + 1]){
//                 $temp = $arr[$j];
//                 $arr[$j] = $arr[$j + 1];
//                 $arr[$j + 1] = $temp;
//             }
//         }
//     }
//     return $arr;
// }

// print_r(bullingSort($examplearr));

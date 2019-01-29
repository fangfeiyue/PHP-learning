<?php
date_default_timezone_set("PRC");
header("content-type:text/html;charset=utf-8");

function fbnq($n) {
  if ($n <= 1) return $n;
  return fbnq($n-1)+fbnq($n-2);
}
// 1 1 2 3 5 8 13 21 34...
echo fbnq(9);

function sum($n, $m) {
  if ($n<=$m){
    return $n;
  }
  // $n $n+1 $n+2..$m-1, $m
  return sum($n, $m - 1) + $m;
}

echo sum(1, 100);
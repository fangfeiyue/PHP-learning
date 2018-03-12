<?php
header('content-type:text/html;charset=utf-8');
//mt_rand();

// echo mt_rand(1, 2);

// echo mt_rand(1000, 9999);


// $validate1 = '<span>' + mt_rand(0, 9) + '</span>';
// $validate2 = '<span>' + mt_rand(0, 9) + '</span>';
// $validate3 = '<span>' + mt_rand(0, 9) + '</span>';
// $validate4 = '<span>' + mt_rand(0, 9) + '</span>';
// echo '<br/>', $validate1.$validate2.$validate3.$validate4;

// echo '<span style="color:rgb('.mt_rand(0, 255).','.mt_rand(0, 255).','.mt_rand(0, 255).')">'.mt_rand(1000, 9999).'</span>';

$code1 = '<span style="color:rgb('.mt_rand(0, 255).','.mt_rand(0, 255).','.mt_rand(0, 255).')">'.mt_rand(0, 9).'</span>';

$code2 = '<span style="color:rgb('.mt_rand(0, 255).','.mt_rand(0, 255).','.mt_rand(0, 255).')">'.mt_rand(0, 9).'</span>';

$code3 = '<span style="color: rgb('.mt_rand(0, 255).', '.mt_rand(0, 255).', '.mt_rand(0, 255).',)">'.mt_rand(0, 9).'</span>';

$code4 = '<span style="color: rgb('.mt_rand(0, 255).','.mt_rand(0, 255).','.mt_rand(0, 255).')">'.mt_rand(0, 9).'</span>';

echo $code1.$code2.$code3.$code4;
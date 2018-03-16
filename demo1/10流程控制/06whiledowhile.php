<?php
header('content-type:text/html;charset=utf-8');
date_default_timezone_set('PRC');

$i = 0;

// while ($i < 4){
//     echo $i;
//     $i++;
// }   

echo '<br/>';

// do{
//     echo $i;
//     $i++;
// }while($i < 4);


// while ($i <= 10){
//     if ($i == 3){
//         break;
//     }

//     echo $i,'<br/>';
//     $i++;
// }

for ($i = 0; $i < 10; $i++){
    if ($i == 3){
        return $i;
    }

    echo $i;
}


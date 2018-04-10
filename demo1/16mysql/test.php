<?php
header('content-type:text/html;charset=utf-8');


$ADTAG = 'wx';
$shareurl = "?name=fang";

if(!empty($ADTAG)){
    if (stripos($shareurl,'?') === false){
      $shareurl = $shareurl.'?ADTAG='.urlencode($ADTAG);
    }else{
      $shareurl = $shareurl.'&ADTAG='.urlencode($ADTAG);
    }
}


echo $shareurl;
<?php
header('content-type:text/html;charset=utf-8');

function strongEcho($content, $isVarDump=false) {
  if (!$isVarDump) {
    echo "$content<br/>";
  }else {
    var_dump($content);
  }
}

$arr = [1, 'str', false];

strongEcho($arr, true);
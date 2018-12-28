<?php
function strongEcho($content, $isVarDump=false) {
  if (!$isVarDump) {
    echo "$content<br/>";
  }else {
    var_dump($content);
  }
}

$str = 12;
strongEcho(settype($str, 'float'));
strongEcho(gettype($str));
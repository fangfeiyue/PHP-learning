<?php
function strongEcho($content, $isVarDump=false) {
  if (!$isVarDump) {
    echo "$content<br/>";
  }else {
    var_dump($content);
  }
}

$array = array();

strongEcho($array);

$array = array(1, "fang", "fei", 4, 5, 6);
strongEcho($array, true);

$obj = new StdClass();
strongEcho($obj, true);

strongEcho($fang);
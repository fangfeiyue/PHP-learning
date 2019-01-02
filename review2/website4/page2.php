<?php
  function echoRes($res){
    echo $res, '<br/>';
  }
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>名字<?php echoRes($_SESSION["name"])?></h1>
  <h1>年龄<?php echoRes($_SESSION["age"])?></h1>
</body>
</html>
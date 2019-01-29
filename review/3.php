<?php
  session_start();
  $sessionID = session_id();
  echo $sessionID?:"没有值","<br/>";
  echo session_name(),"<br/>";
  echo $_SESSION["userName"],"<br/>";
  echo "存储路径为",session_save_path();
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
  <h1>我是3页面</h1>
</body>
</html>
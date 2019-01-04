<?php
  if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    // 设置cookie
    setcookie('name', $name, time() + 3600);
    
    // 用于发送原生的 HTTP 头
    header("Location: page2.php");
  }else {
    echo 'failed';
  }
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
  <form method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>">
    <input type="text" name="name">
    <input type="submit" name="submit" value="提交">
  </form>  
</body>
</html>
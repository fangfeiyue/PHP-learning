<?php 
  # 检测变量是否已设置并且非 NULL
  $age      = $_POST["age"];
  $name     = $_GET["name"];
  $password = $_REQUEST["password"];

  if (isset($name)) {
    echo $name;
  }

  if (isset($age)) {
    echo $age;
  }

  if ($password) {
    echo $password;
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
  <form  action="./10get_post.php">
    姓名<input type="text" name="name">
    邮箱<input type="email" name="email">
    <input type="submit">
  </form>

  <form  action="./10get_post.php" method="POST" >
    年龄<input type="text" name="age">
    密码<input type="password" name="password">
    <input type="submit">
  </form>


  <ul>
    <a href="./10get_post.php?name=hello"">hello</a>
    <a href="./10get_post.php?name=world"">world</a>
    <?php echo "我的名字是$name"; ?>
  </ul>
</body>
</html>
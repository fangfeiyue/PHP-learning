<?php
  if (true) {
    $age = $_POST['age'];
    $name = $_POST["name"];
    session_start();
    if ($age&&$name){
      $_SESSION["age"] = $age;
      $_SESSION["name"] = $name;
      echo "保存成功";
    }else {
      echo '不能为空';
    }
  }else {
    echo '提交失败';
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>session</title>
</head>
<body>
  <form method="POST" action="<?php echo $_SERVER["PHP_SELF"] ?>">
    <input type="text" placeholder="enter name" name="name">
    <input type="text" placeholder="enter age" name="age">
    <input type="submit" value="提交"/>
  </form>
</body>
</html>
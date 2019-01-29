<?php

  $arr = [12, 43,34, 45, 65, 3434];

  foreach($arr as &$value) {
    $value *= 2;
    echo $value."<br/>";
  }
  echo "<hr/>";
  foreach(array(232, 34, 54, 342, 234) as &$value) {
    $value *= 2;
    echo $value."<br/>";
  }
  echo "<hr/>";
  foreach (array(1, 2, 3, 4) as &$value) {
    $value = $value * 2;
    echo $value."<br/>";
  }


  $arr = [
    ["id"=>"1","userName"=>"fang", "age"=>18, "email"=>"29@qq.com"],
    ["id"=>"2","userName"=>"fang", "age"=>18, "email"=>"29@qq.com"],
    ["id"=>"3","userName"=>"fang", "age"=>18, "email"=>"29@qq.com"],
    ["id"=>"4","userName"=>"fang", "age"=>18, "email"=>"29@qq.com"],
    ["id"=>"5","userName"=>"fang", "age"=>18, "email"=>"29@qq.com"]
  ];
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
  <h1>用户列表</h1>
  <table>
    <tr>
      <td>编号</td>
      <td>用户名</td>
      <td>年龄</td>
      <td>邮箱</td>
    </tr>
    <?php foreach ($arr as $subArr):?>
      <tr>
        <?php foreach ($subArr as $value):?>
          <td><?php echo $value?></td>
        <?php endforeach;?>
      </tr>
    <?php endforeach;?>
  </table>
</body>
</html>
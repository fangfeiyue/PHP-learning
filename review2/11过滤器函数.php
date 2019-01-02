<?php
header("contentt-type:text/html;charset=utf-8");
 $data = $_GET["data"];

 # bool filter_has_var ( int $type , string $variable_name ) — 检测是否存在指定类型的变量
 # type: INPUT_GET、 INPUT_POST、 INPUT_COOKIE、 INPUT_SERVER、 INPUT_ENV 里的其中一个
 # variable_name: 要检查的变量名
 if (filter_has_var(INPUT_GET, 'data')) {
   echo '成功了';
 }else {
   echo '失败了';
 }   


 # 使用特定的过滤器过滤一个变量
 if (filter_var($data)) {
   echo 'yes';
 }else {
   echo 'no';
 }


 # 验证内容是否是邮箱
 if (isset($data)){
  # 验证是否是邮箱

  # filter_input — 通过名称获取特定的外部变量，并且可以通过过滤器处理它
  if (filter_input(INPUT_GET, 'data', FILTER_VALIDATE_EMAIL)) {
    echo "邮箱验证正确";
  }else {
    echo "邮箱验证失败";
  }
  echo $data;
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
  <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="get">
    <input type="text" name="data">
    <button type="submit">提交</button>
  </form>
</body>
</html>

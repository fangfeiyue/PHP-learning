<?php
  # 可以使用 $_COOKIE 读取。 Cookie 值同样也存在于 $_REQUEST
  $name = $_REQUEST["name"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</h
<body>
  <?php if ($name): ?>
    <h1>名字是<?php echo $name; ?></h1>
  <?php endif; ?>
</body>
</html>
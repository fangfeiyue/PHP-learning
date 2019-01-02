<!-- https://bootswatch.com/ -->
<?php include "server_info.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>服务器与客户端信息</title>
  <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h1>服务器端的配置信息</h1>
    <?php if ($server): ?>
      <ul class="list-group">
        <?php foreach($server as $key => $value):?>
          <li class="list-group-item">
            <strong><?php echo $key; ?>:</strong>
            <?php echo $value; ?>
          </li>
        <?php endforeach;?>
      </ul>
    <?php endif;?>
    <h1>客户端的配置信息</h1>
    <?php if ($client): ?>
      <ul class="list-group">
        <?php foreach($client as $key => $value): ?>
          <li class="list-group-item">
            <strong><?php echo $key; ?></strong>
            <?php echo $value; ?>
          </li>
        <?php endforeach;?>
      </ul>
    <?php endif;?>
  </div>
</body>
</html>
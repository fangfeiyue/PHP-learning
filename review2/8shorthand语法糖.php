<?php
  header('content-type:text/html;charset=utf-8');
  $loggedIn = true;
?>

<h1>
  <?php if($loggedIn){ ?>
    <h1>welcome to here</h1>
  <?php }else{ ?>
    <h1>welcome to there</h1>
  <?php } ?>
</h1>


<!-- 简洁的写法 -->
<h1>
<?php if ($loggedIn): ?>
    <h1>hello world</h1>
<?php else:?>
    <h1>world hello</h1>
<?php endif;?>
</h1>

<ul>
  <?php for($i=0;$i<10;$i++):?>
    <li><?php echo $i ?></li>
  <?php endfor;?>
</ul>

<ul>
  <?php foreach([12,34324, 454, 2323, 34411] as $item): ?>
    <li><?php echo $item ?></li>
  <?php endforeach; ?>
</ul>



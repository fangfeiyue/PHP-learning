<?php
	date_default_timezone_set('prc');
	header('content-type:text/html;charset=utf-8');

	$commentsArr =[];
	$fileName = "msg.txt";
	
	if (file_exists($fileName)){
		$comments     = file_get_contents($fileName);
		if (strlen($comments)){
			$commentsArr = unserialize($comments);
		}
	}

	function getUserInput($str){
		//strip_tags — 从字符串中去除 HTML 和 PHP 标记
		return strip_tags( $_POST[$str]);
	}

	if (isset($_POST['pubMsg'])){
		$time     = time();
		$title    = getUserInput('title');
		$content  = getUserInput('content');
		$userName = getUserInput('userName');
		$userInput = compact('userName', 'title', 'content', 'time');
		
		array_push($commentsArr, $userInput);
		$commentsArr = serialize($commentsArr);

		if (file_put_contents($fileName, $commentsArr)){
			echo "<script>alert('留言成功');location.href='./messageBoard.php'</script>"; 
		}else{
			echo "<script>alert('留言失败');location.href='./messageBoard.php'</script>"; 
		}
	}
?>
<!DOCTYPE>
<html>
<head>
	<meta charset="UTF-8">
	<script type="text/javascript" src="http://www.francescomalagrino.com/BootstrapPageGenerator/3/js/jquery-2.0.0.min.js"></script>
	<script type="text/javascript" src="http://www.francescomalagrino.com/BootstrapPageGenerator/3/js/jquery-ui"></script>
	<link href="http://www.francescomalagrino.com/BootstrapPageGenerator/3/css/bootstrap-combined.min.css" rel="stylesheet" media="screen">
	<script type="text/javascript" src="http://www.francescomalagrino.com/BootstrapPageGenerator/3/js/bootstrap.min.js"></script>
</head>

<body>
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span12">
				<div class="page-header">
					<h1>
						<small><span>留言板1.0</span></small>
					</h1>
				</div>
				<div class="hero-unit">
					<h1>
						Hello, world!
					</h1>
					<p>
						这是一个可视化布局模板, 你可以点击模板里的文字进行修改, 也可以通过点击弹出的编辑框进行富文本修改. 拖动区块能实现排序.
					</p>
					<p>
						<a rel="nofollow" class="btn btn-primary btn-large" href="#">参看更多 »</a>
					</p>
				</div>
				<table class="table">
					<thead>
						<tr>
							<th>
								编号
							</th>
							<th>
								用户名
							</th>
							<th>
								标题
							</th>
							<th>
								时间
							</th>
							<th>
								内容
							</th>
						</tr>
					</thead>
					<tbody>
						<?php
							if (is_array($commentsArr) && count($commentsArr)>0){
								$i = 0;
								foreach($commentsArr as $comment){
?>
						<tr class="success">
							<td>
								<?php echo $i++;?>
							</td>
							<td>
								<?php echo $comment['userName'];?>
							</td>
							<td>
								<?php echo $comment['title'];?>
							</td>
							<td>
								<?php echo date('Y-m-d H:i:m',$comment['time']);?>
							</td>
							<td>
								<?php echo $comment['content'];?>
							</td>
						</tr>
						<?php 
						}} ?>
					</tbody>
				</table>
				<form class="form-horizontal" action="#" method="post">
					<div>请留言</div>
					<div class="control-group">
						<label class="control-label" for="inputEmail">用户名</label>
						<div class="controls">
							<input id="inputEmail" required name="userName" type="text" />
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="inputPassword">标题</label>
						<div class="controls">
							<input id="inputPassword" required type="text" name="title" />
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="inputPassword">内容</label>
						<div class="controls">
							<textarea name="content" required rows="5" cols="30"></textarea>
						</div>
					</div>
					<div class="control-group">
						<div class="controls">
							<input type="submit" name="pubMsg" class="btn btn-primary" value="发布留言"/>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>

</html>
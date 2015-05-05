<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<title>test</title>
<script src="jquery.js" type="text/javascript"></script>
<script language="javascript" type="text/javascript">
</script>
<style type="text/css">
	body{
		background: url("__PUBLIC__/images/patterns/pattern1.png");
	}
	.chat{
		height: 600px;
		width: 660px;
		display: block;
		background-color: #1f3134;
		margin: auto auto;
	}
	.chat_l{
		width: 400px;
		height: 600px;
		background-color: #333631;
		float: left;

	}
	.chat_r{
		width: 270px;
		height: 600px;
		background-color: #d6c6af;
		float: right;
	}
	.chat1{
		margin-top: 5px;
		border:1px solid;
	}
</style>
</head>
<body>
	<div class="chat">
		<h2>信息展示</h2>

		<?php if($result): if(is_array($result)): foreach($result as $key=>$v): ?><div class="chat1">
			<ul>
				<li>发送者：<?php echo ($v["send"]); ?></li>
				<li>时间：<?php echo (date("y-m-d h:i",$v["time"])); ?></li>
				<li>接收者：<?php echo ($v["receive"]); ?></li>
			</ul>
			<ul>
				<li>标题：<?php echo ($v["title"]); ?></li>
				<li>内容：<?php echo ($v["content"]); ?></li>
			</ul>
		</div><?php endforeach; endif; ?>
		<ul>
			<li><?php echo ($page); ?></li>
		</ul>
		<?php else: ?>
		
		<ul>
			<li>没有未读信息</li>
			<li><a href="<?php echo U(GROUP_NAME.'/Select/oldmsg');?>">查看历史信息</a></li>
		</ul><?php endif; ?>
	</div>
</body>
</html>
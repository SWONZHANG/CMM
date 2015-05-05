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
	.status{
		float:right;
		margin-right: 50px;
	}
</style>
</head>
<body>
	<div class="chat">
		<h2>信息展示</h2>
		<?php if(is_array($result)): foreach($result as $key=>$v): ?><div class="chat1">
		<ul class="status"><li>状态:
		<?php if(($v["status"] == 1)): ?>已读
		<?php elseif(($v["status"] == 0)): ?>未读
		<?php elseif(($v["status"] == 2)): ?>未处理&nbsp;<a href="">处理</a>
		<?php elseif(($v["status"] == 3)): ?>已处理<?php endif; ?></li></ul>
			<ul>
				<li>发送者：<?php echo ($v["send"]); ?></li>
				<li>时间：<?php echo (date("y-m-d h:i",$v["time"])); ?></li>
				<li>接收者：<?php echo ($v["receive"]); ?>舍管</li>
			</ul>
			
			<ul>
				<li>报修宿舍：<?php echo ($v["dormitory"]); ?></li>
				<li>内容：<?php echo ($v["content"]); ?></li>
			</ul>

		</div><?php endforeach; endif; ?>
		<ul><li><?php echo ($page); ?></li></ul>
	</div>
</body>
</html>
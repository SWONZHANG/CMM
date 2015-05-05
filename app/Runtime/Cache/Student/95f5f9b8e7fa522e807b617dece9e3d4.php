<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<title>test</title>
<script src="jquery.js" type="text/javascript"></script>
<script language="javascript" type="text/javascript">
$(document).ready(function(){
	$("input[type='submit']").click(function(){
		if($('.content').val=''){
			alert('内容不能为空！');
		}
	});
});
</script>
<style type="text/css">
	body{
		background: url("__PUBLIC__/images/patterns/pattern1.png");
	}
	.chat{
		height: 600px;
		width: 700px;
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
</style>
</head>
<body>
	<div class="chat">
		<div class="chat_l">
			<h2>报修信息推送</h2>
			<form method="post" action="<?php echo U(GROUP_NAME.'/Select/fixHandle');?>">
			<i>报修内容（请详细写出）</i>
			<textarea name="content" class="content" cols="50" rows="20"></textarea>
			<input type="hidden" name="receive" value="<?php echo ($dormitory); ?>">
			<input type="hidden" name="send" value=<?php echo ($_SESSION['snum']); ?>>
			<input type="submit" />
			</form>
		</div>
		<div class="chat_r">
		<ul><li><a href="<?php echo U(GROUP_NAME.'/Select/fixHistory');?>">报修历史</a></li></ul>
			<ul>
				<li>发送对象</li>
				<li><?php echo ($dormitory); ?>宿管</li>
			</ul>
		</div>
	</div>
</body>
</html>
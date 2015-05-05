<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<title>test</title>
<script src="jquery.js" type="text/javascript"></script>
<script language="javascript" type="text/javascript">
$(document).ready(function(){
	$('.bb').click(function(){
		alert('ff');
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
			<h2>信息推送</h2>
			<textarea name="" cols="50" rows="20"></textarea>
			<button name="">提交</button>
		</div>
		<div class="chat_r">
			<ul>
				<li>选择对象</li>
				<li>一班</li>
				<li>二班</li>
			</ul>
		</div>
	</div>
</body>
</html>
<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="css/html,charset=utf-8" />
	<style type="text/css">
	body{
		background: url("__PUBLIC__/images/patterns/pattern1.png");
	}
	#box{
		height: 600px;
		width: 700px;
		display: block;
		background-color: #1f3134;
		margin: auto auto;
	}32
	li a{
		color: white;
		text-decoration: none;
		font-weight: bold;
		font-size: 20px;
	}
	li{
		height: 100px;
		height:50px;
		background-color: #84a2d4;
		text-align: center;
		margin-top: 10px;
	}
	ul{
		margin-top: 10px;
	}
	</style>
</head>
<body>
	<div id="box">
		<ul>
			<li><a href="<?php echo U(GROUP_NAME.'/Select/showmsg');?>">物业报修信息</a></li>
			<li><a href="">宿舍违规信息</a></li>
			<li><a href="">历史信息</a></li>
			<li><a href="">历史推送信息</a></li>
			<li><a href="<?php echo U(GROUP_NAME.'/Select/sendmsg');?>">信息推送</a></li>
		</ul>
	</div>
</body>
</html>
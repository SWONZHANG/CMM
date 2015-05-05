<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<style type="text/css">

	*{
		margin: 0px;
		padding: 0px;
	}
	.header{
		width:100%;
		height:70px;
		background-color: blue;
	}
	.nav{
		min-width: 700px;
		text-align: center;
	}
	.nav li{
		display: inline;
		
	}
	.nav li a:hover{
		background-color: blue;
		color:white;
	}
	.nav li a{
		text-decoration: none;
		font-weight: bold;
		font-size: 22px;
		padding: 13px 30px;
	}
	</style>
</head>
<body>
	<div class="header">
	</div>
	<div class="nav">
		<ul>
			<li>
				<a href="">首页</a>
			</li>
			<li>
				<a href="">论坛</a>
			</li>
			<li>
				<a href="<?php echo U(GROUP_NAME.'/Login/index');?>">自助信息系统</a>
			</li>
			<li>
				<a href="">校园新闻</a>
			</li>
			<li>
				<a href="">其他</a>
			</li>
		</ul>
	</div>
</body>
</html>
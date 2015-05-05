<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<meta http-equiv="Content-Type" content="text/html,charset=utf-8">
	<title></title>
		<!--[if IE]>
<style type="text/css">
	  #top1{
		min-width: 800px;
	}
</style>
	<![endif]--> 
<style type="text/css">
	body{
		background-color: #e5e4e6;
		
	}
	#top1{
		min-width: 640px;
	}
	#top2 li .cc{
		width:20px;
		height: 20px;
		background-color: #174a78;
		border-radius: 20px;
		position: absolute;
		margin-top: -12px;
		margin-left: 16px;
		text-align: center;
		color:white;
		font-weight: bold;
		font-size: 14px;
	}
	a{
		text-decoration: none;
		font-weight: bold;
		color:#000;
	}
	#top2 li{
		display: inline;	
		padding: 6px 30px;
		background-color: white;
	}
	#top2{
		margin-top: 25px;
	}
	#top2 li::before{
		content: '';
		width: 23px;
		height: 20px;
		background: url("__PUBLIC__/images/righttop4.png");
		position: absolute;
		margin-left: -23px;
	}
	#top2 .top23::before{
		content: '';
		width: 23px;
		height: 20px;
		background: url("__PUBLIC__/images/righttop2.png");
		position: absolute;
		margin-left: -23px;
	}
	#top2 .top21::before{
		content: '';
		width: 23px;
		height: 20px;
		background: url("__PUBLIC__/images/lefttop1.png");
		position: absolute;
		margin-left: -23px;
		margin-top: -2px;
	}
	#top3 img{
		width:26px;
		height:26px;
	}
	#top3{
		float:right;
		margin-top: -43px;
		margin-right: 50px;
		background: white;
		padding-top: 3px;
		padding-right: 3px;
		padding-left: 2px;
	}
	#top3 .top31{
		position: relative;
		top:-14px;
		color: #999999;
		font-weight: bold;
	}
	#top3 .top32{
		position: relative;
		right: 64px;
		font-weight: bold;
	}
	#top3 .top33{
		margin-left: -25px;
	}
	#top1 .exit{
		float: right;
		margin-top: -43px;
		margin-right: 8px;
		border: 0px;
	}
	#top1 #top4{
		margin-right: 20px;
	}
</style>
<script type="text/javascript" src="__PUBLIC__/js/jquery.js"></script>
<script type="text/javascript">
	$(function() { 
		if($.browser.msie){
			$("body").css({"min-width":"680px"});
		}});
</script>
</head>
<body bgcolor="white">
<div id="top1">
	<div id="top2">
		<ul>
			<li class="top21">&nbsp;<a href="<?php echo U(GROUP_NAME.'/Select/index');?>" target="rightFrame"><span>功能</span></a></li>
			<li class="top22">&nbsp;<a href="<?php echo U(GROUP_NAME.'/Select/showmsg');?>" target="rightFrame"><span>信息</span><span class="cc">8</span></a></li>
			<li class="top23">&nbsp;<a href="#"><span>刷新</span></a></li>
		</ul>
	</div>
	<div id="top4">
	<div id="top3">
		<img src="__PUBLIC__/images/img14.png">
		<span class="top31">Welcome</span><span class="top32"><?php echo ($_SESSION['pnum']); ?></span><span class="top33"><a href="#"><img border="0" src="__PUBLIC__/images/righttop3.png"></a></span>
	</div>
	<a class="exit" href="<?php echo U('Home/Login/logout');?>" target="_top"><img border="0" src="__PUBLIC__/images/exit.png"></a></div>
</div>
</body>
</html>
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
<meta charset="utf-8">
<style type="text/css">
	*{
		margin: 0;
		padding: 0;
	}
	body{
		background: url("__PUBLIC__/images/leftbg.png") no-repeat;
		min-width: 255px;
		max-height: 1213px;
	}
	#leftbox{
		min-width: 255px;
		max-height: 1213px;
	}
	#leftbox #box1{
		width: 263px;
		height: 101px;
	} 
	#leftbox #box2{
		width:263px;
		height: 157px;
	}
	#leftbox #box2 img{
		height: 75px;
		width: 75px;
		border-radius: 50px;
		margin-top: 40px;
		margin-left: 30px;
	}
	#leftbox #box2 span{
		position: relative;
		bottom: 66px;
		left:120px;
		color:white;
		font-weight: bold;
	}
	#leftbox #nav{
		width: 263px;
		font-weight: bold;
		font-size: 18px;
	}
	#leftbox #nav li{
		color:#ffffff;
		text-decoration: none;
		padding-top: 10px;
		padding-bottom: 10px;
		padding-left: 90px;
		transition:width 2s;
		-moz-transition:width 2s; /* Firefox 4 */
		-webkit-transition:width 2s; /* Safari and Chrome */
		-o-transition:width 2s; /* Opera */
	}
	#leftbox #nav .selected{
		background-color: #0d0015;
		color:#009966;
	}
	#leftbox #nav li{
		color: #999999;
		
	}
	#leftbox #nav li:hover{
		background-color: #0d0015;color:#009966;
	}
	a{
		text-decoration: none;
	}
	#leftbox #nav .selected::after{
		content:'';
		width:10px;
		height: 42px;
		background-color:#009966;
		position: absolute;
		left:252.5px;
		margin-top: -11px;
	}
	#leftbox #nav .nav7::before{
		content:'';
		width:23px;
		height:23px;
		position: absolute;
		background: url("__PUBLIC__./images/leftbox2.png");
		left:48px;
		margin-top: 7px;
	}
	#leftbox #nav .nav6::before{
		content:'';
		width:23px;
		height:23px;
		position: absolute;
		background: url("__PUBLIC__/images/leftbox5.png");
		left:50px;
		margin-top: 7px;

	}
	#leftbox #nav .nav5::before{
		content:'';
		width:23px;
		height:23px;
		position: absolute;
		background: url("__PUBLIC__/images/leftbox6.png");
		left:50px;
		margin-top: 7px;

	}
	#leftbox #nav .nav4::before{
		content:'';
		width:23px;
		height:23px;
		position: absolute;
		background: url("__PUBLIC__/images/leftbox7.png");
		left:50px;
		margin-top: 7px;

	}
	#leftbox #nav .nav3::before{
		content:'';
		width:23px;
		height:23px;
		position: absolute;
		background: url("__PUBLIC__/images/leftbox3.png");
		left:50px;
		margin-top: 7px;

	}
	#leftbox #nav .nav2::before{
		content:'';
		width:23px;
		height:23px;
		position: absolute;
		background: url("__PUBLIC__/images/leftbox1.png");
		left:52px;
		margin-top: 7px;

	}
	#leftbox #nav .nav1::before{
		content:'';
		width:23px;
		height:23px;
		position: absolute;
		background: url("__PUBLIC__/images/leftbox4.png");
		left:52px;
		margin-top: 7px;

	}
	#leftbox #box2 .box21{
		color:#009966;
	}
</style>
<script type="text/javascript" src="__PUBLIC__/js/jquery.js"></script>
<script type="text/javascript">
	$(function(){	
	//顶部导航切换
	$("#nav li").click(function(){
		$("#nav li.selected").removeClass("selected")
		$(this).addClass("selected");
	})	
})
</script>
</head>
<body>
<div id="leftbox">
	<div id="box1">
		<img src="__PUBLIC__./images/lefttop.png"/>
	</div>
	<div id="box2">
		<img src="__PUBLIC__/images/4.jpg" />
		<span><p>欢迎：</p><p>张锡旺</p><p>状态:<em class="box21">在线</em></p>
	</div>
	<hr width="262px" bgcolor="black" float="left">
	<div id="nav">
		<ul>
			<a class="nav1" href="<?php echo U(GROUP_NAME.'/Index/person');?>" target="rightFrame"><li  class="selected">学生个人信息</li></a>
			<a class="nav2" href="#" target="rightFrame"><li>个人日程表</li></a>
			<a class="nav3" href="<?php echo U(GROUP_NAME.'/Index/imglist');?>" target="rightFrame"><li>饭堂实时情况</li></a>
			<a class="nav4" href="<?php echo U(GROUP_NAME.'/Index/electric');?>" target="rightFrame"><li>宿舍电量查询</li></a>
			<a class="nav5" href="<?php echo U(GROUP_NAME.'/Index/weather');?>" target="rightFrame"><li>天气查询</li></a>
			<a class="nav6" href="#" target="rightFrame"><li>课程表</li></a>
			<a class="nav7" href="#" target="rightFrame"><li>板块添加</li></a>
		</ul>
	</div>
</div>
</body>
</html>
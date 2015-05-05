<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/left.css" />
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
		<img src="__PUBLIC__/images/lefttop.png"/>
	</div>
	<div id="box2">
		<img src="__PUBLIC__/images/4.jpg" />
		<span><p>欢迎：</p><p><?php echo ($_SESSION['pnum']); ?></p><p>状态:<em class="box21">在线</em></p>
	</div>
	<hr width="262px" bgcolor="black" float="left">
	<div id="nav">
		<ul>
			<a class="nav1" href="<?php echo U(GROUP_NAME.'/Index/person');?>" target="rightFrame"><li  class="selected">物管个人信息</li></a>
			<a class="nav2" href="#" target="rightFrame"><li>个人日程表</li></a>
			<a class="nav3" href="<?php echo U(GROUP_NAME.'/Index/imglist');?>" target="rightFrame"><li>饭堂实时情况</li></a>
			<a class="nav5" href="<?php echo U(GROUP_NAME.'/Index/weather');?>" target="rightFrame"><li>天气查询</li></a>
			<a class="nav7" href="#" target="rightFrame"><li>板块添加</li></a>
		</ul>
	</div>
</div>
</body>
</html>
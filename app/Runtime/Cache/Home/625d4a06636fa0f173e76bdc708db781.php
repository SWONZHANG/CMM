<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<meta http-equiv="Content-Type" content="text/html,charset=utf-8">
	<title></title>
	<script type="text/javascript" src="__PUBLIC__/js/jquery.min.js"></script>
	<script type="text/javascript">
	var verifyURL='<?php echo U(GROUP_NAME."/Login/verify",'','');?>';
	</script>
	<script type="text/javascript" src="__PUBLIC__/js/login.js"></script>
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/login.css" />
</head>
<body>
</div>
<!--[if !IE]> <h1>除IE外都可识别 </h1><!--<![endif]-->
<div id="box">
	<div id="top">
		<span><h1>GET IN TOUCH WITH US!</h1></span>
	</div>
	<div id="top1">
		<form method="post" action="<?php echo U(GROUP_NAME.'/Login/login','' ,'');?>">
		<ul>
		<li>
		<span class="top11">账号</span>
		<input type="text" name="num" id="username" placeholder="fff" >
		</li><li>
		<span class="top12">密码</span>
		<input type="password" id="password" name="pwd"/>
		</li>
		<li class='select'>
			<span>选择登陆身份</span>
			<select name="who">
				<option value="student">学生</option>
				<option value="property">物业</option>
				<option value="teacher">教师</option>
			</select>
		</li>
		<li>
		<span class="top14">验证码</span>
		<input type="text" name="verify" />
		<img onClick="xx()" id="code" src="<?php echo U(GROUP_NAME.'/Login/verify','','');?>" /><a  href="javascript: change_code(this);">看不清楚</a>
		</li>
		<li><input class="submit"type="submit" name="submit" value="提交"></li>
		</ul>
		</form>
	</div>
</div>
</body>
</html>
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
	<script type="text/javascript" src="__PUBLIC__/js/jquery.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$('#box .onup:not(:first)').hide();
		$('#top li').click(function(){
			var vv=$('#top li').index(this);
			$('#box .onup').eq(vv).show()
				.addClass('ccc')
				.siblings().hide();
			
			
		});
		$('.onup img').hover(function(){
			
		})
	})
	</script>
	<style type="text/css">

	#top li{
		display: inline;
		margin-left: 20px;
		cursor:pointer;
	}
	#top li:hover{
		color: red;
	}
	#box,#top{
		width: 1000px;
		margin: 0 auto;
	}
	.cc{
		color:yellow;
	}
	#top li{
		padding: 10px;
		background-color: yellow;
	}
	.onup img{
		width:300px;
		height: 300px;
		margin-left: 10px;
		float: left;
		border:1px solid #000;
		margin-top: 10px;
	}
	.onup .ddd{

		width: 300px;
		height: 50px;
		background: black;
		
	}
	
	</style>
</head>
<body>
	<div id="top"><ul>
		<li class="list">文件上传</li>
		<li class="list">文件下载</li>
	</ul></div>
	<div id="box">
	<div class="onup">
	<p>文件上传</p>
	<form method="post" action="<?php echo U(GROUP_NAME.'/Index/onHandle');?>" enctype="multipart/form-data">
		<input type="file" name="filefield" />
		<input type="submit" name="button" value="上传">
	</form>
	</div>
	<div class="onup">
		<p>文件下载</p>
		<?php if(is_array($img)): foreach($img as $key=>$v): ?><div class="nn">
		<img class="chuxian" src="__ROOT__/<?php echo ($v["imgload"]); ?>" alt="图片">
		<p class="ddd"><a href=""> 下载该图片</a></p>
		</div><?php endforeach; endif; ?>

	</div>
	</div>
</body>
</html>
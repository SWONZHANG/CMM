<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html,">
</head>
<frameset cols="263px,*" frameborder="no" border="0" framespacing="0" name="allFrame" title="allFrame">
  <frame src="<?php echo U(GROUP_NAME.'/Index/left');?>" name="leftFrame"  scrolling="No" noresize="noresize" id="leftFrame" title="leftFrame" />
  <frameset rows="65px,*" cols="*" frameborder="no" name="allright" id="allright" title="allright" border="0" framespacing="0">
    <frame src="<?php echo U(GROUP_NAME.'/Index/righttop');?>" name="topFrame" scrolling="No" noresize="noresize" id="topFrame" title="topFrame" />
    <frame src="<?php echo U(GROUP_NAME.'/Index/person');?>" name="rightFrame" id="rightFrame" title="rightFrame" />
  </frameset>
</frameset>
<noframes><body>
</body></noframes>
</html>
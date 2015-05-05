<?php
return array(
	//'配置项'=>'配置值'
	//设置独立分组
	'APP_GROUP_LIST' => 'Student,Teacher,Property,Home',//分组列表
	'DEFAULT_GROUP' => 'Home', //默认分组
	'APP_GROUP_MODE' => 1, //分组模式
	'APP_GROUP_PATH' => Module, //分组置放目录

	//设置tpl前缀
	'TMPL_FILE_DEPR' => '_',
	//URL路由配置
	'URL_ROUTER_ON' => TRUE,
	'URL_MODEL' => 2,

	//链接数据库
	'DB_HOST' => 'localhost',
	'DB_PWD' => '6831089',
	'DB_USER' => 'root',
	'DB_NAME' => 'project',
	'DB_PREFIX' => 'i_'


);
?>
<?php
define("APP_PATH",dirname(__FILE__));
define("SP_PATH",dirname(__FILE__).'/SpeedPHP');
$spConfig = array(
	'db' => array( // 数据库设置
	    'driver' => 'mysql',
        'host' => 'localhost',  // 数据库地址
        'login' => 'fanmingf_root', // 数据库用户名
        'password' => '8641683', // 数据库密码
        'database' => 'fanmingf_zhiban', // 数据库的库名称
        'prefix' => 'z_' // 表前缀
    ),
	'view' => array(
		'enabled' => TRUE, // 开启Smarty支持
		'config' =>array(
			'template_dir' => APP_PATH.'/tpl', // 模板页面所在的目录
			'compile_dir' => APP_PATH.'/tmp', // 临时文件编译目录
			'cache_dir' => APP_PATH.'/tmp', // 临时文件缓存目录
			'left_delimiter' => '<{',  // Smarty左限定符，默认是{
			'right_delimiter' => '}>', // Smarty右限定符，默认是}
		),
	),

);
require(SP_PATH."/SpeedPHP.php");
import(APP_PATH . '/controller/zhiban.php');
spRun();

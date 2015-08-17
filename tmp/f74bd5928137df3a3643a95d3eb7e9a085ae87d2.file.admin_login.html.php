<?php /* Smarty version Smarty-3.0.8, created on 2014-03-20 22:45:21
         compiled from "/data/htdocs/share.fanmingfei.cn/zhiban/tpl/admin_login.html" */ ?>
<?php /*%%SmartyHeaderCode:874744814532aff01456196-41787969%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f74bd5928137df3a3643a95d3eb7e9a085ae87d2' => 
    array (
      0 => '/data/htdocs/share.fanmingfei.cn/zhiban/tpl/admin_login.html',
      1 => 1395325561,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '874744814532aff01456196-41787969',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>后台登陆</title>
<link href="<?php echo $_smarty_tpl->getVariable('tmpurl')->value;?>
/css/style.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $_smarty_tpl->getVariable('tmpurl')->value;?>
/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $_smarty_tpl->getVariable('tmpurl')->value;?>
/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<script src="<?php echo $_smarty_tpl->getVariable('tmpurl')->value;?>
/js/jquery.js"></script>
<script src="<?php echo $_smarty_tpl->getVariable('tmpurl')->value;?>
/js/bootstrap.min.js"></script>
</head>
<body>
<div class="back"></div>
	<div class="grid userinfo">
		<form rote="form" action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'loginin'),$_smarty_tpl);?>
" method="post">
			<input type="password" name="password" class="form-control" id="exampleInputPassword" placeholder="密码"/>
			<input type="submit" class="btn btn-default" style="float:right;"/>
		</form>
	</div>
</body>
</html>
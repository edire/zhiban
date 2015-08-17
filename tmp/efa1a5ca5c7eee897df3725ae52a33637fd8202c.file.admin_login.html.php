<?php /* Smarty version Smarty-3.0.8, created on 2014-12-12 14:58:44
         compiled from "/data/www/edire/zhiban/tpl/admin_login.html" */ ?>
<?php /*%%SmartyHeaderCode:967330911548a92247139c8-32352176%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'efa1a5ca5c7eee897df3725ae52a33637fd8202c' => 
    array (
      0 => '/data/www/edire/zhiban/tpl/admin_login.html',
      1 => 1395325561,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '967330911548a92247139c8-32352176',
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
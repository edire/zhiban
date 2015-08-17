<?php /* Smarty version Smarty-3.0.8, created on 2014-03-19 23:39:51
         compiled from "D:\phpStudy\WWW\zhiban/tpl\admin_login.html" */ ?>
<?php /*%%SmartyHeaderCode:87645329ba47c4b5b9-09611545%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '230fc6db1b48819422df77c30eb2d2ab50cd4984' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\zhiban/tpl\\admin_login.html',
      1 => 1395242603,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '87645329ba47c4b5b9-09611545',
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
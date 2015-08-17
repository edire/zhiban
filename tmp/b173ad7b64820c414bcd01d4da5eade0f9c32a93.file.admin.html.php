<?php /* Smarty version Smarty-3.0.8, created on 2014-03-19 23:41:57
         compiled from "D:\phpStudy\WWW\zhiban/tpl\admin.html" */ ?>
<?php /*%%SmartyHeaderCode:34875329bac5562889-38809261%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b173ad7b64820c414bcd01d4da5eade0f9c32a93' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\zhiban/tpl\\admin.html',
      1 => 1395243714,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '34875329bac5562889-38809261',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo $_smarty_tpl->getVariable('site_name')->value;?>
</title>
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
<div class="userinfo grid">
	<form action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'refresh'),$_smarty_tpl);?>
" role="form" method="post">
		<div class="form-group">
			每节课限制人数<input type="text" name="number" class="form-control" id="exampleInputText" placeholder="每节课限制人数" value="<?php echo $_smarty_tpl->getVariable('number')->value;?>
"/>
		</div>
		<div class="form-group">
			网站名称<input type="text" name="sitename" class="form-control" id="exampleInputText" placeholder="网站名称" value="<?php echo $_smarty_tpl->getVariable('sitename')->value;?>
"/>
		</div>
		<div class="form-group">
			网站公告<textarea type="text" name="notice" class="form-control" rows="3" placeholder="网站公告"><?php echo $_smarty_tpl->getVariable('notice')->value;?>
</textarea>
		</div>
		<div class="form-group">
			管理员密码（无需修改请勿修改）
			<input type="password" name="password" class="form-control" id="exampleInputPassword" placeholder="密码" value="<?php echo $_smarty_tpl->getVariable('password')->value;?>
"/>
		</div>
		<div class="form-group">
			<input type="submit" class="btn btn-default" value="刷新数据"/>
		</div>
	</form>
</div>
</body>
</html>
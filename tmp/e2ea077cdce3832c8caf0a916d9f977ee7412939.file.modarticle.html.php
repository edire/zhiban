<?php /* Smarty version Smarty-3.0.8, created on 2014-12-27 17:31:06
         compiled from "/data/www/edire/zhiban/tpl/modarticle.html" */ ?>
<?php /*%%SmartyHeaderCode:983879670549e7c5af257d3-47988081%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2ea077cdce3832c8caf0a916d9f977ee7412939' => 
    array (
      0 => '/data/www/edire/zhiban/tpl/modarticle.html',
      1 => 1395325563,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '983879670549e7c5af257d3-47988081',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>修改</title>
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
	<p style="border-bottom:1px solid;font-weight:bold;">添加值班</p>
	<form action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'modifyarticle'),$_smarty_tpl);?>
" method="post" class="form-inline" role="form">
	<input type="hidden" value="<?php echo $_smarty_tpl->getVariable('aid')->value;?>
" name="aid"/>
	<div class="form-group">
	<input type="text" value="<?php echo $_smarty_tpl->getVariable('title')->value;?>
" name="title" class="form-control" id="exampleInputText" placeholder="标题"/>
	</div>
	<div class="form-group">
	<input type="text" name="number" value="<?php echo $_smarty_tpl->getVariable('number')->value;?>
" class="form-control" id="exampleInputText" placeholder="每节课限制人数"/>
	</div>
		<div class="form-group">
	<input type="text" name="year" style="width:70px" class="form-control " id="exampleInputText" placeholder="年">
	</div>
	<div class="form-group">
	<input type="text" name="mon" style="width:70px" class="form-control " id="exampleInputText" placeholder="月">
	</div>
	<div class="form-group">
	<input type="text" name="day" style="width:70px" class="form-control " id="exampleInputText" placeholder="日">
	</div>
	<div class="form-group">
	<input type="text" name="hour" style="width:70px" class="form-control " id="exampleInputText" placeholder="时">
	</div>
	<input type="submit" class="btn btn-default" value="修改"/>
	</form>
</div>
</body>
</html>
<?php /* Smarty version Smarty-3.0.8, created on 2014-06-16 00:25:14
         compiled from "/home/fanmingf/public_html/htdocs/share.fanmingfei.cn/zhiban/tpl/signin.html" */ ?>
<?php /*%%SmartyHeaderCode:1091182515539e396a28e116-48701553%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44687924f3eec19bb5b235fef1d18732f921636b' => 
    array (
      0 => '/home/fanmingf/public_html/htdocs/share.fanmingfei.cn/zhiban/tpl/signin.html',
      1 => 1395325560,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1091182515539e396a28e116-48701553',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>注册</title>
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
<form action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'sign'),$_smarty_tpl);?>
" method="post" role="form">
<div class="form-group">
姓名<input type="text" name="username" class="form-control" id="exampleInputText" placeholder="姓名">
</div>
<div class="form-group">
密码<input type="password" name="password" class="form-control" id="exampleInputPassword" placeholder="密码">
</div>
<div class="form-group">
手机<input type="text" name="phone" class="form-control" id="exampleInputText" placeholder="手机">
</div>
<input type="submit" class="btn btn-default"/>
</form>
</div>
</body>
</html>
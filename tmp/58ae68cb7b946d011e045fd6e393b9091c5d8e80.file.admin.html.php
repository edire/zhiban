<?php /* Smarty version Smarty-3.0.8, created on 2014-04-21 00:03:47
         compiled from "/data/htdocs/share.fanmingfei.cn/zhiban/tpl/admin.html" */ ?>
<?php /*%%SmartyHeaderCode:9255700455353efe3d0c422-49864947%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58ae68cb7b946d011e045fd6e393b9091c5d8e80' => 
    array (
      0 => '/data/htdocs/share.fanmingfei.cn/zhiban/tpl/admin.html',
      1 => 1398009809,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9255700455353efe3d0c422-49864947',
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
/js/datepicker.js"></script>
<script src="<?php echo $_smarty_tpl->getVariable('tmpurl')->value;?>
/js/bootstrap.min.js"></script>
<script src="<?php echo $_smarty_tpl->getVariable('tmpurl')->value;?>
/ckeditor/ckeditor.js"></script>
</head>
<body>
<div class="back"></div>
<div class="userinfo grid">
	<p style="border-bottom:1px solid;font-weight:bold;">添加值班</p>
	<form action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'addarticle'),$_smarty_tpl);?>
" method="post" class="form-inline" role="form">
	<div class="form-group">
	<input type="text" name="title" class="form-control" id="exampleInputText" placeholder="标题">
	</div>
	<div class="form-group">
	<input type="text" style="width: 80px;" name="number" class="form-control time" id="exampleInputText" placeholder="限制人数">
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
	<input type="submit" class="btn btn-default" value="添加"/>
	</form>
</div>
<div class="zhiban grid">
	<p style="border-bottom:1px solid;font-weight:bold;">值班表列表</p>
	<ul class="zhibanlist">
		<?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('artsql')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value){
?>
		<li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'article','p'=>$_smarty_tpl->tpl_vars['article']->value['id']),$_smarty_tpl);?>
" target="_blank" style="<?php echo $_smarty_tpl->tpl_vars['article']->value['style'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a> | 每节人次 <?php echo $_smarty_tpl->tpl_vars['article']->value['number'];?>
 | 结束时间：<?php echo $_smarty_tpl->tpl_vars['article']->value['time'];?>
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'delarticle','p'=>$_smarty_tpl->tpl_vars['article']->value['id']),$_smarty_tpl);?>
" style="float:right">删除</a> <span style="float:right"> | </span> <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'modarticle','p'=>$_smarty_tpl->tpl_vars['article']->value['id']),$_smarty_tpl);?>
" style="float:right">修改</a> <span style="float:right"> | </span> <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'rearticle','p'=>$_smarty_tpl->tpl_vars['article']->value['id']),$_smarty_tpl);?>
" style="float:right">清空</a></li>
		<?php }} ?>
	</ul>
	<p style="overflow:hidden">	
	<?php if ($_smarty_tpl->getVariable('nextpage')->value!=''){?><a href="<?php echo $_smarty_tpl->getVariable('nextpage')->value;?>
" class="btn btn-default" style="float:right">下一页</a><?php }?>
	<?php if ($_smarty_tpl->getVariable('prevpage')->value!=''){?><a href="<?php echo $_smarty_tpl->getVariable('prevpage')->value;?>
" class="btn btn-default" style="float:right">上一页</a><?php }?>
	</p>
</div>
<div class="zhiban grid">
	<p style="border-bottom:1px solid;font-weight:bold;">系统设置</p>
	<form action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'refresh'),$_smarty_tpl);?>
" role="form" method="post">
		<div class="form-group">
			网站名称<input type="text" name="sitename" class="form-control" id="exampleInputText" placeholder="网站名称" value="<?php echo $_smarty_tpl->getVariable('sitename')->value;?>
"/>
		</div>
		<div class="form-group">
			网站地址<input type="text" name="siteurl" class="form-control" id="exampleInputText" placeholder="网站名称" value="<?php echo $_smarty_tpl->getVariable('siteurl')->value;?>
"/>
		</div>
		<div class="form-group">
			网站公告<textarea type="text" name="notice" class="form-control" rows="3" placeholder="网站公告"><?php echo $_smarty_tpl->getVariable('notice')->value;?>
</textarea>
					<script type="text/javascript">CKEDITOR.replace('notice');</script>
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
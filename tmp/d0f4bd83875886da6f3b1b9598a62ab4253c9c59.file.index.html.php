<?php /* Smarty version Smarty-3.0.8, created on 2014-06-13 16:39:44
         compiled from "/home/fanmingf/public_html/htdocs/share.fanmingfei.cn/zhiban/tpl/index.html" */ ?>
<?php /*%%SmartyHeaderCode:1010655170539b2950477c24-84523850%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0f4bd83875886da6f3b1b9598a62ab4253c9c59' => 
    array (
      0 => '/home/fanmingf/public_html/htdocs/share.fanmingfei.cn/zhiban/tpl/index.html',
      1 => 1398008911,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1010655170539b2950477c24-84523850',
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
<script>
var t;
		$(document).ready(function(){
			$(".namebox").on("click",function(abc){
				var abc=$(this);
				var t=$(this).attr("t");
				var c=$(this).attr("c");
				var u=<?php echo $_smarty_tpl->getVariable('uid')->value;?>
;
				if (u=="0"){
					alert("请先登录！");
					return;
				}
				$.post("<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'option','a'=>'add'),$_smarty_tpl);?>
", { tid:t, cid: c, uid:u},
						   function(data){
						     if (data=="0"){
						    	 alert("本节课已满员");
						     }else{
									abc.html(data);
						     }
				});
			});
			
		});
</script>
</head>
<body>
<div class="back"></div>
<div class="userinfo grid">
<?php if ($_smarty_tpl->getVariable('uid')->value>0){?>
<p class="logintip"><?php echo $_smarty_tpl->getVariable('username')->value;?>
,你好，欢迎来到<?php echo $_smarty_tpl->getVariable('site_name')->value;?>
!<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'loginout'),$_smarty_tpl);?>
">退出</a></p>

<?php }else{ ?>
<p class="logintip">登陆<?php echo $_smarty_tpl->getVariable('site_name')->value;?>
!</p>
<form action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'login'),$_smarty_tpl);?>
" method="post" class="form-inline" role="form">
<div class="form-group">
<input type="text" name="username" class="form-control" id="exampleInputText" placeholder="姓名">
</div>
<div class="form-group">
<input type="password" name="password" class="form-control" id="exampleInputPassword" placeholder="密码">
</div>
<input type="submit" class="btn btn-default" value="登录"/>
</form>
<?php }?>
<p class="notice">
公告：<?php echo $_smarty_tpl->getVariable('notice')->value;?>

</p>
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
" style="<?php echo $_smarty_tpl->tpl_vars['article']->value['style'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a>（<?php echo $_smarty_tpl->tpl_vars['article']->value['endtime'];?>
结束）</li>
		<?php }} ?>
	</ul>
<p style="overflow:hidden">	
<?php if ($_smarty_tpl->getVariable('nextpage')->value!=''){?><a href="<?php echo $_smarty_tpl->getVariable('nextpage')->value;?>
" class="btn btn-default" style="float:right">下一页</a><?php }?>
<?php if ($_smarty_tpl->getVariable('prevpage')->value!=''){?><a href="<?php echo $_smarty_tpl->getVariable('prevpage')->value;?>
" class="btn btn-default" style="float:right">上一页</a><?php }?>
</p>
</div>
<div class="grid zhiban">
	© <a href="http://www.ys.ldu.edu.cn/" target="_blank">鲁东大学艺术学院 </a> 版权所有 |
	Powerby <a href="http://www.ldustu.com" target="_blank">鲁大学生网</a> &gt; 
	<a href="http://www.fanmingfei.cn" target="_blank">Edire-范明非</a> |  
	<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'guestbook'),$_smarty_tpl);?>
" target="_blank">留言&吐槽</a> | 
	<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'signin'),$_smarty_tpl);?>
" target="_blank">注册</a> | 
	<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'login'),$_smarty_tpl);?>
" target="_blank">Refresh</a>
</div>
</body>
</html>
<?php /* Smarty version Smarty-3.0.8, created on 2014-03-20 00:01:33
         compiled from "D:\phpStudy\WWW\zhiban/tpl\index.html" */ ?>
<?php /*%%SmartyHeaderCode:257875329bf5d9d4583-21178664%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74a750cb3cf687c976693e9d3fbba88c78482fe1' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\zhiban/tpl\\index.html',
      1 => 1395244874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '257875329bf5d9d4583-21178664',
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
<div class="zhiban grid table-responsive">
<table class="select table">
	<tr>
		<th></th>
		<th>周一</th>
		<th>周二</th>
		<th>周三</th>
		<th>周四</th>
		<th>周五</th>
	</tr>
	<tr>
		<td>早自习</td>
		<td class="namebox" t="1" c="0"><?php echo $_smarty_tpl->getVariable('n10')->value;?>
</td>
		<td class="namebox" t="2" c="0"><?php echo $_smarty_tpl->getVariable('n20')->value;?>
</td>
		<td class="namebox" t="3" c="0"><?php echo $_smarty_tpl->getVariable('n30')->value;?>
</td>
		<td class="namebox" t="4" c="0"><?php echo $_smarty_tpl->getVariable('n40')->value;?>
</td>
		<td class="namebox" t="5" c="0"><?php echo $_smarty_tpl->getVariable('n50')->value;?>
</td>
	</tr>
	<tr>
		<td>第一大节</td>
		<td class="namebox" t="1" c="1"><?php echo $_smarty_tpl->getVariable('n11')->value;?>
</td>
		<td class="namebox" t="2" c="1"><?php echo $_smarty_tpl->getVariable('n21')->value;?>
</td>
		<td class="namebox" t="3" c="1"><?php echo $_smarty_tpl->getVariable('n31')->value;?>
</td>
		<td class="namebox" t="4" c="1"><?php echo $_smarty_tpl->getVariable('n41')->value;?>
</td>
		<td class="namebox" t="5" c="1"><?php echo $_smarty_tpl->getVariable('n51')->value;?>
</td>
	</tr>
	<tr>
		<td>第二大节</td>
		<td class="namebox" t="1" c="2"><?php echo $_smarty_tpl->getVariable('n23')->value;?>
</td>
		<td class="namebox" t="2" c="2"><?php echo $_smarty_tpl->getVariable('n22')->value;?>
</td>
		<td class="namebox" t="3" c="2"><?php echo $_smarty_tpl->getVariable('n32')->value;?>
</td>
		<td class="namebox" t="4" c="2"><?php echo $_smarty_tpl->getVariable('n42')->value;?>
</td>
		<td class="namebox" t="5" c="2"><?php echo $_smarty_tpl->getVariable('n52')->value;?>
</td>
	</tr>
	<tr>
		<td>第三大节</td>
		<td class="namebox" t="1" c="3"><?php echo $_smarty_tpl->getVariable('n13')->value;?>
</td>
		<td class="namebox" t="2" c="3"><?php echo $_smarty_tpl->getVariable('n23')->value;?>
</td>
		<td class="namebox" t="3" c="3"><?php echo $_smarty_tpl->getVariable('n33')->value;?>
</td>
		<td class="namebox" t="4" c="3"><?php echo $_smarty_tpl->getVariable('n43')->value;?>
</td>
		<td class="namebox" t="5" c="3"><?php echo $_smarty_tpl->getVariable('n53')->value;?>
</td>
	</tr>
	<tr>
		<td>第四大节</td>
		<td class="namebox" t="1" c="4"><?php echo $_smarty_tpl->getVariable('n14')->value;?>
</td>
		<td class="namebox" t="2" c="4"><?php echo $_smarty_tpl->getVariable('n24')->value;?>
</td>
		<td class="namebox" t="3" c="4"><?php echo $_smarty_tpl->getVariable('n34')->value;?>
</td>
		<td class="namebox" t="4" c="4"><?php echo $_smarty_tpl->getVariable('n44')->value;?>
</td>
		<td class="namebox" t="5" c="4"><?php echo $_smarty_tpl->getVariable('n54')->value;?>
</td>
	</tr>
	<tr>
		<td>晚自习</td>
		<td class="namebox" t="1" c="5"><?php echo $_smarty_tpl->getVariable('n15')->value;?>
</td>
		<td class="namebox" t="2" c="5"><?php echo $_smarty_tpl->getVariable('n25')->value;?>
</td>
		<td class="namebox" t="3" c="5"><?php echo $_smarty_tpl->getVariable('n35')->value;?>
</td>
		<td class="namebox" t="4" c="5"><?php echo $_smarty_tpl->getVariable('n45')->value;?>
</td>
		<td class="namebox" t="5" c="5"><?php echo $_smarty_tpl->getVariable('n55')->value;?>
</td>
	</tr>
</table>
</div>
<div class="grid zhiban">
	© <a href="http://www.ldustu.com" target="_blank">鲁大学生网</a> | <a href="http://www.fanmingfei.cn" target="_blank">Edire-范明非</a> | <a href="http://www.ys.ldu.edu.cn/" target="_blank">鲁东大学艺术学院 </a> 版权所有 | <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'guestbook'),$_smarty_tpl);?>
" target="_blank">留言&吐槽</a> | <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'signin'),$_smarty_tpl);?>
" target="_blank">注册</a> | <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'login'),$_smarty_tpl);?>
" target="_blank">Refresh</a>
</div>
</body>
</html>
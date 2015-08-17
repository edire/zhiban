<?php /* Smarty version Smarty-3.0.8, created on 2014-12-14 22:20:12
         compiled from "/data/www/edire/zhiban/tpl/printf.html" */ ?>
<?php /*%%SmartyHeaderCode:892449026548d9c9c587896-42950292%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3122c02500bc86612cb99c1e53304ddfb7d34164' => 
    array (
      0 => '/data/www/edire/zhiban/tpl/printf.html',
      1 => 1395325560,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '892449026548d9c9c587896-42950292',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>打印</title>
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
<style>
.select td:hover{
	background:#fff;
}
table,td,th{
	border:2px solid;
}
</style>

</head>
<body style="margin:40px">
<p style="text-align:center;font-size:44px;">
<?php echo $_smarty_tpl->getVariable('title')->value;?>

</p>
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
<p style="text-align:right">
<?php echo $_smarty_tpl->getVariable('time')->value;?>
<a href="javascript:window.print();" style="text-decoration:none"> 打印</a>
</p>
</body>
</html>
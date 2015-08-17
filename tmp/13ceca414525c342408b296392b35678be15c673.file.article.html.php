<?php /* Smarty version Smarty-3.0.8, created on 2014-06-10 12:31:18
         compiled from "/data/htdocs/share.fanmingfei.cn/zhiban/tpl/article.html" */ ?>
<?php /*%%SmartyHeaderCode:149582423353968a16560a91-28393494%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13ceca414525c342408b296392b35678be15c673' => 
    array (
      0 => '/data/htdocs/share.fanmingfei.cn/zhiban/tpl/article.html',
      1 => 1402362360,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '149582423353968a16560a91-28393494',
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
				var a=<?php echo $_smarty_tpl->getVariable('aid')->value;?>
;
				if (u=="0"){
					alert("请先登录！");
					return;
				}
				$.post("<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'option','a'=>'add'),$_smarty_tpl);?>
", { tid:t, cid: c, uid:u, aid:a},
						   function(data){
						     if (data=="0"){
						    	 alert("本节课已满员");
						     }else if(data=="-1"){
						    	 alert("已经结束");				    	 
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
"> 退出</a><span style="float:right"> | </span><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'index'),$_smarty_tpl);?>
">返回首页 </a></p>

<?php }else{ ?>
<p class="logintip"><?php echo $_smarty_tpl->getVariable('title')->value;?>
<?php echo $_smarty_tpl->getVariable('site_name')->value;?>
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
<p style=" font-size: 20px; text-align: center; font-weight: bold; "><?php echo $_smarty_tpl->getVariable('title')->value;?>
<br>（<?php echo $_smarty_tpl->getVariable('endtime')->value;?>
结束）<br><?php echo $_smarty_tpl->getVariable('status')->value;?>
</p>
<table class="select table">
	<tr>
		<th></th>
		<th>周一</th>
		<th>周二</th>
		<th>周三</th>
		<th>周四</th>
		<th>周五</th>
		<th>周六</th>
		<th>周日</th>
	</tr>
	<tr>
		<th>早自习</th>
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
		<td class="namebox" t="6" c="0"><?php echo $_smarty_tpl->getVariable('n60')->value;?>
</td>
		<td class="namebox" t="7" c="0"><?php echo $_smarty_tpl->getVariable('n70')->value;?>
</td>
	</tr>
	<tr>
		<th>第一大节</th>
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
		<td class="namebox" t="6" c="1"><?php echo $_smarty_tpl->getVariable('n61')->value;?>
</td>
		<td class="namebox" t="7" c="1"><?php echo $_smarty_tpl->getVariable('n71')->value;?>
</td>
	</tr>
	<tr>
		<th>第二大节</th>
		<td class="namebox" t="1" c="2"><?php echo $_smarty_tpl->getVariable('n12')->value;?>
</td>
		<td class="namebox" t="2" c="2"><?php echo $_smarty_tpl->getVariable('n22')->value;?>
</td>
		<td class="namebox" t="3" c="2"><?php echo $_smarty_tpl->getVariable('n32')->value;?>
</td>
		<td class="namebox" t="4" c="2"><?php echo $_smarty_tpl->getVariable('n42')->value;?>
</td>
		<td class="namebox" t="5" c="2"><?php echo $_smarty_tpl->getVariable('n52')->value;?>
</td>
		<td class="namebox" t="6" c="2"><?php echo $_smarty_tpl->getVariable('n62')->value;?>
</td>
		<td class="namebox" t="7" c="2"><?php echo $_smarty_tpl->getVariable('n72')->value;?>
</td>
	</tr>
	<tr>
		<th>第三大节</th>
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
		<td class="namebox" t="6" c="3"><?php echo $_smarty_tpl->getVariable('n63')->value;?>
</td>
		<td class="namebox" t="7" c="3"><?php echo $_smarty_tpl->getVariable('n73')->value;?>
</td>
	</tr>
	<tr>
		<th>第四大节</th>
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
		<td class="namebox" t="6" c="4"><?php echo $_smarty_tpl->getVariable('n64')->value;?>
</td>
		<td class="namebox" t="7" c="4"><?php echo $_smarty_tpl->getVariable('n74')->value;?>
</td>
	</tr>
	<tr>
		<th>晚自习</th>
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
		<td class="namebox" t="6" c="5"><?php echo $_smarty_tpl->getVariable('n65')->value;?>
</td>
		<td class="namebox" t="7" c="5"><?php echo $_smarty_tpl->getVariable('n75')->value;?>
</td>
	</tr>
</table>

<?php if ($_smarty_tpl->getVariable('uid')->value=='4'){?>
<div>
<p style="border-bottom:1px solid">
特殊情况记录添加
</p>
<form action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'addconn'),$_smarty_tpl);?>
" method="post" class="form-inline" role="form">
<input type="hidden" name="aid" value="<?php echo $_smarty_tpl->getVariable('aid')->value;?>
">
<div class="form-group">
<input type="text" name="name" class="form-control" id="exampleInputText" placeholder="姓名">
</div>
<div class="form-group">
<input type="text" name="status" class="form-control" id="exampleInputText" placeholder="情况">
</div>
<input type="submit" class="btn btn-default" value="提交"/>
</form>
<?php }?>
<div>
<p style="border-bottom:1px solid">
特殊情况记录
</p>
<div class="table-responsive">
<table class="select table">

<tr>
	<th>姓名</th>
	<th>情况</th>
	<th>发布时间</th>
</tr><?php  $_smarty_tpl->tpl_vars['conn'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('connsql')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['conn']->key => $_smarty_tpl->tpl_vars['conn']->value){
?>
<tr>
	<td><?php echo $_smarty_tpl->tpl_vars['conn']->value['name'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['conn']->value['status'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['conn']->value['time'];?>
</td>
<tr>
<?php }} ?>
</table>
</div>
</div>
<script type="text/javascript">
   /*
    * 请修改下面js对象的内容以完成定制
    * 内容：请定制为需要提醒用户的内容,
    * 时间：请定制为事件发生的时间，格式为：年-月-日 时:分 
    * advance：请定制为需要提前提醒用户的时间，0为准时提醒
    * url： 请定制为提醒用户访问的url链接
    * icon： 生成的icon的大小，可选值为1，2，3，尺寸分别为90*24，63*24，50*16
    * 注意：如果不使用标准接口，而是按需要自己生成链接地址
    * 请用encodeURIComponent对内容和时间进行编码。
    */
var __qqClockShare = {
   content: "这是艺术学院学生会值班的提醒。请点击网址查看详细值班时间。",
   time: "<?php echo $_smarty_tpl->getVariable('time')->value;?>
",
   advance: 0,
   url: location.href,
   icon: "1_1"
};
document.write('<a href="http://qzs.qq.com/snsapp/app/bee/widget/open.htm#content=' + encodeURIComponent(__qqClockShare.content) +'&time=' + encodeURIComponent(__qqClockShare.time) +'&advance=' + __qqClockShare.advance +'&url=' + encodeURIComponent(__qqClockShare.url) + '" target="_blank"><img src="http://i.gtimg.cn/snsapp/app/bee/widget/img/' + __qqClockShare.icon + '.png" style="border:0px;"/></a>');

</script>
<span class="logintip" style="color:rgb(56,35,255)">可设置提醒时间，具体值班表将发到个人QQ上。默认时间为周日晚8点。</span>
<div class="erweima">
<?php echo $_smarty_tpl->getVariable('erweima')->value;?>

<p  class="logintip" style="color:rgb(56,35,255);margin-top:10px;">本页面二维码，可用手机扫描二维码直接进入网页。<br/>也可复制一下地址：<br><?php echo $_smarty_tpl->getVariable('url')->value;?>
</p>

</div>
</div>
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
" target="_blank">Refresh</a> | 
	<a href="<?php ob_start();?><?php echo $_smarty_tpl->getVariable('aid')->value;?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'printf','p'=>$_tmp1),$_smarty_tpl);?>
" target="_blank">打印</a>
</div>
</body>
</html>
<?php /* Smarty version Smarty-3.1.11, created on 2013-04-01 14:32:12
         compiled from "D:\AppServ\www\esshop\webroot\center\current_wanted.html" */ ?>
<?php /*%%SmartyHeaderCode:1317651599a6c752d98-25168448%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af9e9811d56e0e124b33402afbd1393e0d370d25' => 
    array (
      0 => 'D:\\AppServ\\www\\esshop\\webroot\\center\\current_wanted.html',
      1 => 1364647407,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1317651599a6c752d98-25168448',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wanteds' => 0,
    'wanted' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_51599a6c7f34d9_17456129',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51599a6c7f34d9_17456129')) {function content_51599a6c7f34d9_17456129($_smarty_tpl) {?><!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=10" />
<title>收藏夹</title>
<script src="public/javascript/common.js"></script>
<script type="text/javascript">
	import_style(["public/css/center_common.css",
	              "public/css/current_wanted.css"]);
	import_script(["public/javascript/current_wanted.js"]);
</script>
</head>
<body>
<div id="main_body">
	<div class="title">
		<span class="caption">已经购买的商品</span>
	</div>
	<ul class="main_content clearfix" id="produce_list">
		<?php if (count($_smarty_tpl->tpl_vars['wanteds']->value)==0){?>
			<li>
				暂时还没有要求购的商品,赶快去发布一个吧
			</tr>
		<?php }?>
		<?php  $_smarty_tpl->tpl_vars['wanted'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['wanted']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wanteds']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['wanted']->key => $_smarty_tpl->tpl_vars['wanted']->value){
$_smarty_tpl->tpl_vars['wanted']->_loop = true;
?>
		<li class="list_item">
			<a href="?wantedbuy!wantedbuy_detail.html?id=<?php echo $_smarty_tpl->tpl_vars['wanted']->value['wanted_id'];?>
" target="_top" class="wanted_name"><?php echo $_smarty_tpl->tpl_vars['wanted']->value['wanted_name'];?>
</a>
			<span class="time"><?php echo $_smarty_tpl->tpl_vars['wanted']->value['wanted_time'];?>
</span>
			<div class="handle inline_block">
				<a href="javascript:;" onclick="mark_old(this,'<?php echo $_smarty_tpl->tpl_vars['wanted']->value['wanted_id'];?>
','')">标记为已购买</a>
				<a href="javascript:;" onclick="del_wanted(this,'<?php echo $_smarty_tpl->tpl_vars['wanted']->value['wanted_id'];?>
')">删除</a>
			</div>
		</li>
		<?php } ?>
	</ul>
</div>
</body>
</html><?php }} ?>
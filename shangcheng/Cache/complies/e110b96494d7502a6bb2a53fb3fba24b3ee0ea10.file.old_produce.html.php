<?php /* Smarty version Smarty-3.1.11, created on 2013-04-01 14:32:11
         compiled from "D:\AppServ\www\esshop\webroot\center\old_produce.html" */ ?>
<?php /*%%SmartyHeaderCode:738751599a6b5dfe92-50779019%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e110b96494d7502a6bb2a53fb3fba24b3ee0ea10' => 
    array (
      0 => 'D:\\AppServ\\www\\esshop\\webroot\\center\\old_produce.html',
      1 => 1364647556,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '738751599a6b5dfe92-50779019',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'final_result' => 0,
    'item' => 0,
    'good' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_51599a6b6a0cd4_06243811',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51599a6b6a0cd4_06243811')) {function content_51599a6b6a0cd4_06243811($_smarty_tpl) {?><!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=10" />
<title>已经购买的商品</title>
<script src="public/javascript/common.js"></script>
<link rel="stylesheet" href="public/css/center_common.css" type="text/css" />
<link rel="stylesheet" href="public/css/old_produce.css" />
<script src="public/javascript/current_produce.js"></script>
<script src="public/javascript/old_produce.js"></script>
</head>
<body>
<div id="main_body">
	<div class="title">
		<span class="caption">已经购买的商品</span>
	</div>
	<div id="produce_list">
	<?php if (count($_smarty_tpl->tpl_vars['final_result']->value)==0){?>
	<div>
		暂时还没有历史记录
	</div>
	<?php }?>
	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['final_result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
		<dl class="group_item">
			<dt class="group_title"><?php echo $_smarty_tpl->tpl_vars['item']->value['mouth'];?>
</dt>
			<?php  $_smarty_tpl->tpl_vars['good'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['good']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['result']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['good']->key => $_smarty_tpl->tpl_vars['good']->value){
$_smarty_tpl->tpl_vars['good']->_loop = true;
?>
			<dd class="produce_item">
				<img class="produce_img" src="<?php echo $_smarty_tpl->tpl_vars['good']->value['face'];?>
" />
				<ul class="produce_detail">
					<li><span>商品名：</span><a href="?goods!goods_detail.html?goods_id=<?php echo $_smarty_tpl->tpl_vars['good']->value['goods_id'];?>
" target="_top"><?php echo $_smarty_tpl->tpl_vars['good']->value['name'];?>
</a></li>
					<li><span>时&emsp;间：</span><?php echo $_smarty_tpl->tpl_vars['good']->value['create_time'];?>
</li>
					<li><span>价&emsp;格：</span><?php echo $_smarty_tpl->tpl_vars['good']->value['price'];?>
元</li>
					<li><a href="javascript:;" onclick="del_good(this,'<?php echo $_smarty_tpl->tpl_vars['good']->value['goods_id'];?>
')" >删除该商品</a></li>
				</ul>
			</dd>
			<?php } ?>
		</dl>
	<?php } ?>
		<div class="clear"></div>
	</div>
</div>
</body>
</html><?php }} ?>
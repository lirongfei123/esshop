<?php /* Smarty version Smarty-3.1.11, created on 2013-04-01 14:32:04
         compiled from "D:\AppServ\www\esshop\webroot\center\current_produce.html" */ ?>
<?php /*%%SmartyHeaderCode:458651599a64125910-91766278%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '698310c12ec8ec2f6976f66ee5620a82e36e77d2' => 
    array (
      0 => 'D:\\AppServ\\www\\esshop\\webroot\\center\\current_produce.html',
      1 => 1364647382,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '458651599a64125910-91766278',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'goods' => 0,
    'good' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_51599a641d4705_66526071',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51599a641d4705_66526071')) {function content_51599a641d4705_66526071($_smarty_tpl) {?><!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=10" />
<title>收藏夹</title>
<script src="public/javascript/common.js"></script>
<script src="public/javascript/current_produce.js"></script>
<link rel="stylesheet" type="text/css" href="public/css/center_common.css" />
<link rel="stylesheet" type="text/css" href="public/css/current_produce.css" />
</head>
<body>
<div id="main_body">
	<div class="title">
		<span class="caption">已经购买的商品</span>
	</div>
	<ul class="main_content clearfix" id="produce_list">
		<?php if (count($_smarty_tpl->tpl_vars['goods']->value)==0){?>
			<li>
				暂时还没有商品哦,赶快去发布一个吧
			</li>
		<?php }?>
		<?php  $_smarty_tpl->tpl_vars['good'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['good']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['good']->key => $_smarty_tpl->tpl_vars['good']->value){
$_smarty_tpl->tpl_vars['good']->_loop = true;
?>
		<li class="collect_item">
			<dl>
				<dt>
					<img src="<?php echo $_smarty_tpl->tpl_vars['good']->value['face'];?>
" />
					<div class="handle clearfix">
						<a href="javascript:;" onclick="mark_old(this,'<?php echo $_smarty_tpl->tpl_vars['good']->value['goods_id'];?>
')">标记为已完成</a>
						<span class="inline_block" onclick="del_good(this,'<?php echo $_smarty_tpl->tpl_vars['good']->value['goods_id'];?>
')"></span>
					</div>
				</dt>
				<dd><a href="?goods!goods_detail.html?goods_id=<?php echo $_smarty_tpl->tpl_vars['good']->value['goods_id'];?>
" target="_top"><?php echo $_smarty_tpl->tpl_vars['good']->value['name'];?>
</a></dd>
				<dd class="price"><?php echo $_smarty_tpl->tpl_vars['good']->value['price'];?>
</dd>
			</dl>
		</li>
		<?php } ?>
	</ul>
</div>
</body>
</html><?php }} ?>
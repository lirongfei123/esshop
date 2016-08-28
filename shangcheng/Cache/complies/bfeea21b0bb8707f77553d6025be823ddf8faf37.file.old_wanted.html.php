<?php /* Smarty version Smarty-3.1.11, created on 2013-04-01 14:32:17
         compiled from "D:\AppServ\www\esshop\webroot\center\old_wanted.html" */ ?>
<?php /*%%SmartyHeaderCode:1083351599a71cf9922-83991551%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bfeea21b0bb8707f77553d6025be823ddf8faf37' => 
    array (
      0 => 'D:\\AppServ\\www\\esshop\\webroot\\center\\old_wanted.html',
      1 => 1364647570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1083351599a71cf9922-83991551',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'final_result' => 0,
    'item' => 0,
    'wanted' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_51599a71dc71e0_67166300',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51599a71dc71e0_67166300')) {function content_51599a71dc71e0_67166300($_smarty_tpl) {?><!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=10" />
<title>已经购买的商品</title>
<script src="public/javascript/common.js"></script>
<link rel="stylesheet" href="public/css/center_common.css" type="text/css" />
<link rel="stylesheet" href="public/css/old_produce.css" />
<link rel="stylesheet" href="public/css/old_wanted.css" />
<script src="public/javascript/current_wanted.js"></script>
<script src="public/javascript/old_wanted.js"></script>
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
			<?php  $_smarty_tpl->tpl_vars['wanted'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['wanted']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['result']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['wanted']->key => $_smarty_tpl->tpl_vars['wanted']->value){
$_smarty_tpl->tpl_vars['wanted']->_loop = true;
?>
			<dd class="produce_item">
				<div class="wanted_name">
					<a href="?wantedbuy!wantedbuy_detail.html?id=<?php echo $_smarty_tpl->tpl_vars['wanted']->value['wanted_id'];?>
" target="_top"><?php echo $_smarty_tpl->tpl_vars['wanted']->value['wanted_name'];?>
</a>
				</div>
				<ul class="produce_detail">
					<li><span>求购时间：</span><?php echo $_smarty_tpl->tpl_vars['wanted']->value['wanted_time'];?>
</li>
					<li><span>求购价格：</span><?php echo $_smarty_tpl->tpl_vars['wanted']->value['wanted_price'];?>
元</li>
					<a href="javascript:;" onclick="del_wanted(this,'<?php echo $_smarty_tpl->tpl_vars['wanted']->value['wanted_id'];?>
')">删除</a>
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
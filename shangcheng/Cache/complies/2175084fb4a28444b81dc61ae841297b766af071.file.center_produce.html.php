<?php /* Smarty version Smarty-3.1.11, created on 2013-03-22 01:53:37
         compiled from "D:\AppServ\www\pl\webroot\center\center_produce.html" */ ?>
<?php /*%%SmartyHeaderCode:32534514532eb618c39-27414883%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2175084fb4a28444b81dc61ae841297b766af071' => 
    array (
      0 => 'D:\\AppServ\\www\\pl\\webroot\\center\\center_produce.html',
      1 => 1363694079,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32534514532eb618c39-27414883',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_514532eb8ad8e1_07647854',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_514532eb8ad8e1_07647854')) {function content_514532eb8ad8e1_07647854($_smarty_tpl) {?><!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=10" />
<title>已经购买的商品</title>
<script src="public/javascript/common.js"></script>
<link rel="stylesheet" href="public/css/center_common.css" type="text/css" />
<link rel="stylesheet" href="public/css/center_produce.css" />
<script src="public/javascript/center_produce.js"></script>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("center/center_logo.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="main_body">
	<div class="title">
		<span class="caption">已经购买的商品</span>
	</div>
	<div id="produce_list">
	<?php $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['index']->step = 1;$_smarty_tpl->tpl_vars['index']->total = (int)ceil(($_smarty_tpl->tpl_vars['index']->step > 0 ? 10+1 - (1) : 1-(10)+1)/abs($_smarty_tpl->tpl_vars['index']->step));
if ($_smarty_tpl->tpl_vars['index']->total > 0){
for ($_smarty_tpl->tpl_vars['index']->value = 1, $_smarty_tpl->tpl_vars['index']->iteration = 1;$_smarty_tpl->tpl_vars['index']->iteration <= $_smarty_tpl->tpl_vars['index']->total;$_smarty_tpl->tpl_vars['index']->value += $_smarty_tpl->tpl_vars['index']->step, $_smarty_tpl->tpl_vars['index']->iteration++){
$_smarty_tpl->tpl_vars['index']->first = $_smarty_tpl->tpl_vars['index']->iteration == 1;$_smarty_tpl->tpl_vars['index']->last = $_smarty_tpl->tpl_vars['index']->iteration == $_smarty_tpl->tpl_vars['index']->total;?>
		<dl class="group_item">
			<dt class="group_title">2010年5月</dt>
			<?php $_smarty_tpl->tpl_vars['go'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['go']->step = 1;$_smarty_tpl->tpl_vars['go']->total = (int)ceil(($_smarty_tpl->tpl_vars['go']->step > 0 ? 3+1 - (1) : 1-(3)+1)/abs($_smarty_tpl->tpl_vars['go']->step));
if ($_smarty_tpl->tpl_vars['go']->total > 0){
for ($_smarty_tpl->tpl_vars['go']->value = 1, $_smarty_tpl->tpl_vars['go']->iteration = 1;$_smarty_tpl->tpl_vars['go']->iteration <= $_smarty_tpl->tpl_vars['go']->total;$_smarty_tpl->tpl_vars['go']->value += $_smarty_tpl->tpl_vars['go']->step, $_smarty_tpl->tpl_vars['go']->iteration++){
$_smarty_tpl->tpl_vars['go']->first = $_smarty_tpl->tpl_vars['go']->iteration == 1;$_smarty_tpl->tpl_vars['go']->last = $_smarty_tpl->tpl_vars['go']->iteration == $_smarty_tpl->tpl_vars['go']->total;?>
			<dd class="produce_item">
				<img class="produce_img" src="public/images/2.png" />
				<ul class="produce_detail">
					<li><span>时间：</span>2012-5-12</li>
					<li><span>价格：</span>500元</li>
					<li><span>卖家：</span><a href="#">李荣飞</a></li>
				</ul>
			</dd>
			<?php }} ?>
		</dl>
	<?php }} ?>
		<div class="clear"></div>
	</div>
</div>
</body>
</html><?php }} ?>
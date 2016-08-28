<?php /* Smarty version Smarty-3.1.11, created on 2013-03-22 01:53:36
         compiled from "D:\AppServ\www\pl\webroot\center\collect_list.html" */ ?>
<?php /*%%SmartyHeaderCode:18041514532ed6521b6-40933375%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4563100b80abe68c55732c79b91741f7b8ce384d' => 
    array (
      0 => 'D:\\AppServ\\www\\pl\\webroot\\center\\collect_list.html',
      1 => 1363694084,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18041514532ed6521b6-40933375',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_514532ed6e2f45_62640173',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_514532ed6e2f45_62640173')) {function content_514532ed6e2f45_62640173($_smarty_tpl) {?><!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=10" />
<title>收藏夹</title>
<script src="public/javascript/common.js"></script>
<script src="public/javascript/collect_list.js"></script>
<link rel="stylesheet" type="text/css" href="public/css/center_common.css" />
<link rel="stylesheet" type="text/css" href="public/css/collect_list.css" />
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("center/center_logo.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="main_body">
	<div class="title">
		<span class="caption">已经购买的商品</span>
	</div>
	<ul class="collect_content">
		<li class="collect_item">
			<dl>
				<dt><img src="public/images/2.png" /></dt>
				<dd class="handle"><span class="inline_block"></span></dd>
				<dd>这是一件商品</dd>
				<dd class="price">500元</dd>
			</dl>
		</li>
		<li class="collect_item">
			<dl>
				<dt><img src="public/images/2.png" /></dt>
				<dd class="handle"><span class="inline_block"></span></dd>
				<dd>这是一件商品</dd>
				<dd class="price">500元</dd>
			</dl>
		</li>
	</ul>
</div>
</body>
</html><?php }} ?>
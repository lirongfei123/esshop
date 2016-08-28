<?php /* Smarty version Smarty-3.1.11, created on 2013-04-24 03:16:49
         compiled from "D:\AppServ\www\esshop\webroot\center\newbuy.html" */ ?>
<?php /*%%SmartyHeaderCode:2527051599a884a9ee8-39630697%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '95a7ef9be1c77c231ab78b59f2c0a7fbb41a88f9' => 
    array (
      0 => 'D:\\AppServ\\www\\esshop\\webroot\\center\\newbuy.html',
      1 => 1366712815,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2527051599a884a9ee8-39630697',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_51599a884f0080_25670967',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51599a884f0080_25670967')) {function content_51599a884f0080_25670967($_smarty_tpl) {?><!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=10" />
<script src="public/javascript/common.js"></script>
<link rel="stylesheet" type="text/css" href="public/css/center_common.css" />
<link rel="stylesheet" type="text/css" href="public/css/newproduce.css" />
<link rel="stylesheet" type="text/css" href="public/javascript/uploadify/uploadify.css" />
<script type="text/javascript">
	import_script(["public/javascript/kindeditor/kindeditor-min.js",
	               "public/javascript/kindeditor/lang/zh_CN.js",
	               "public/javascript/formcheck/formcheck.js",
	               "public/javascript/newbuy.js",]);
</script>
<title>发布商品</title>
</head>
<body>
<div id="main_body">
	<div class="title">
		<span class="caption">发布商品</span>
	</div>
	<ul class="produce_form">
		<form action="" method="post" id="myform">
			<li>
				<span class="label">求购名称:</span>
				<input type="text" name="wanted_name" class="must" prompt="请输入你要求购的商品" placeholder="请输入你要求购的商品" />
			</li>
			<li>
				<span class="label">分类:</span>
				<select name="wanted_type">
					<option value="2">电子产品</option>
					<option value="1">二手书</option>
					<option value="3">生活用品</option>
					<option value="0">其他</option>
				</select>
			</li>
			<li>
				<span class="label">价格:</span>
				<input type="text" name="wanted_price" class="must" prompt="请输入商品价格" placeholder="请输入商品价格" />
			</li>
			<li>
				<span class="label">求购详情:</span>
				<div class="inline_block">
					<textarea name="kind_textarea" class="must" prompt=" " placeholder=" "></textarea>
				</div>
			</li>
			<li>
				<input type="submit" value="提交" />
			</li>
		</form>
	</ul>
</div>
</body>
</html><?php }} ?>
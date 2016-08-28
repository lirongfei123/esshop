<?php /* Smarty version Smarty-3.1.11, created on 2013-03-31 13:56:40
         compiled from "D:\AppServ\www\pl\webroot\center\newproduce.html" */ ?>
<?php /*%%SmartyHeaderCode:1488551453a6ef088c2-84640896%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2be5439f4d95d5bc58065d638ac5dd0744cf8214' => 
    array (
      0 => 'D:\\AppServ\\www\\pl\\webroot\\center\\newproduce.html',
      1 => 1364738134,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1488551453a6ef088c2-84640896',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_51453a6f019478_41839100',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51453a6f019478_41839100')) {function content_51453a6f019478_41839100($_smarty_tpl) {?><!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=10" />
<script src="public/javascript/common.js"></script>
<link rel="stylesheet" type="text/css" href="public/css/center_common.css" />
<link rel="stylesheet" type="text/css" href="public/javascript/form_check/formCheck.css" />
<link rel="stylesheet" type="text/css" href="public/javascript/uploadify/uploadify.css" />
<link rel="stylesheet" type="text/css" href="public/css/newproduce.css" />
<script type="text/javascript">
	import_script(["public/javascript/kindeditor/kindeditor-min.js",
	               "public/javascript/kindeditor/lang/zh_CN.js",
	               "public/javascript/uploadify/jquery.uploadify.min.js",
	               "public/javascript/newproduce.js",
	               "public/javascript/form_check/formCheck.js",
	               "public/javascript/form_check/json2.js"]);
</script>
<title>发布商品</title>
</head>
<body>
<div id="main_body">
	<div class="title">
		<span class="caption">发布商品</span>
	</div>
	<ul class="produce_form">
		<form action="" method="get" id="myform" name="myform">
			<li>
				<span class="label">商品图片:</span>
				<div class="upload_content inline_block">
					<input type="hidden" name="produce_face" />
					<ul class="img_content" id="img_content">
						
					</ul>
					<div class="file_content">
						<input id="my_uploadify" name="my_uploadify" class="inline_block" type="file" multiple="false" />
					</div>
				</div>
			</li>
			<li>
				<span class="label">商品名称:</span>
				<input type="text" name="goods_name" class="must" prompt="请输入商品名称" placeholder="请输入商品名称" />
			</li>
			<li>
				<span class="label">一句话描述:</span>
				<input type="text" name="onesay" class="must" prompt="请用一句话描述你的商品" placeholder="请用一句话描述你的商品" />
				<div class="onesay_content">如:全新;九成新;有发票;无划痕</div>
			</li>
			<li>
				<span class="label">分类:</span>
				<select name="goods_type">
					<option value="2">电子产品</option>
					<option value="1">二手书</option>
					<option value="3">生活用品</option>
					<option value="0">其他</option>
				</select>
			</li>
			<li>
				<span class="label">价格:</span>
				<input type="text" name="price" class="must" prompt="请输入商品价格" placeholder="请输入商品价格" />
			</li>
			<li>
				<span class="label">商品名称:</span>
				<div class="editor_content inline_block">
					<textarea name="kind_textarea" id="prduce_detail" class="must" prompt=" " placeholder=" "></textarea>
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
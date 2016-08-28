<?php /* Smarty version Smarty-3.1.11, created on 2013-04-23 03:25:53
         compiled from "D:\AppServ\www\esshop\webroot\center\person_center.html" */ ?>
<?php /*%%SmartyHeaderCode:31372515999bad90081-43741866%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ae991e8cbd3025df29c853df182d37926b32aa9' => 
    array (
      0 => 'D:\\AppServ\\www\\esshop\\webroot\\center\\person_center.html',
      1 => 1366687550,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31372515999bad90081-43741866',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_515999badfdca1_83270012',
  'variables' => 
  array (
    'username' => 0,
    'frame' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_515999badfdca1_83270012')) {function content_515999badfdca1_83270012($_smarty_tpl) {?><!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=10" />
<title>我的个人中心</title>
<script src="public/javascript/common.js"></script>
<link rel="stylesheet" type="text/css" href="public/css/center.css" />
<script src="public/javascript/center.js"></script>
</head>
<body>
<div class="top_bar">
	<span><a href="index.php">首页</a>欢迎你,
	<div class="inline_block username">
		<span><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</span>
		<ul class="modify">
			<li><a href="?center-center!modify_psd.html" target="detail_iframe">修改密码</a></li>
			<li><a href="?center-center!modify_info.html" target="detail_iframe">修改资料</a></li>
		</ul>
	</div>
	<a style='margin-left:5px' href="javascript:common_loginout()">注销</a></span>
	<a href="?center-center!newbuy.html" target="detail_iframe">发布求购信息</a>
	<a href="?center-center!newproduce.html" target="detail_iframe">发布二手商品</a>
</div>
<div class="margin_center">
	<a href="?center-center!person_center.html" class="logo">
		<img class="img_middle_background" src="public/images/transparent.png" style="background-image:url(public/images/center_logo.png);" />
	</a>
	<ul class="menu">
		<li><a href="?center-message!message.html" target="detail_iframe" class="inline_block">消息中心</a></li>
		<li><a href="?center-goodadmin!current_produce.html" target="detail_iframe" class="inline_block">正在出售的商品</a></li>
		<li><a href="?center-goodadmin!old_produce.html" target="detail_iframe" class="inline_block">卖出的宝贝</a></li>
		<li><a href="?center-wantedadmin!current_wanted.html" target="detail_iframe" class="inline_block">正在求购的商品</a></li>
		<li><a href="?center-wantedadmin!old_wanted.html" target="detail_iframe" class="inline_block">求购到的宝贝</a></li>
	</ul>
</div>
<div id="main_body">
	<iframe id="detail_iframe" name="detail_iframe" scrolling="no" frameborder="0" width=100% height="200px" src="<?php echo $_smarty_tpl->tpl_vars['frame']->value;?>
"></iframe>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html>
<?php }} ?>
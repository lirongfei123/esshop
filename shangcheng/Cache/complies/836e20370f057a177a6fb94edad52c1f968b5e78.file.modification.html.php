<?php /* Smarty version Smarty-3.1.11, created on 2013-04-24 02:22:53
         compiled from "D:\AppServ\www\esshop\webroot\center\modification.html" */ ?>
<?php /*%%SmartyHeaderCode:18887517530457d6104-50088624%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '836e20370f057a177a6fb94edad52c1f968b5e78' => 
    array (
      0 => 'D:\\AppServ\\www\\esshop\\webroot\\center\\modification.html',
      1 => 1366770170,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18887517530457d6104-50088624',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5175304583ee54_38698657',
  'variables' => 
  array (
    'type' => 0,
    'modify_type' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5175304583ee54_38698657')) {function content_5175304583ee54_38698657($_smarty_tpl) {?><!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=10" />
<script src="public/javascript/common.js"></script>
<link rel="stylesheet" type="text/css" href="public/javascript/uploadify/uploadify.css" />
<script type="text/javascript">
	import_script(["public/javascript/formcheck/formcheck.js",
	               "public/javascript/uploadify/jquery.uploadify.min.js",
	               "public/javascript/modification.js"]);
	import_style([
	              "public/css/login_register.css",
	              "public/css/modification.css"
	              ]);
</script>
<title>资料修改</title>
</head>
<body>
<div id="main_body">
	<div class="register_title clearfix">
		<span class="caption"><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
</span>
	</div>
	<ul class="register_form_content" style="display:<?php echo $_smarty_tpl->tpl_vars['modify_type']->value['info'];?>
;">
		<form action="?login!create_user.html" id="modify_form_info" name="modify_form_info" method="post">
			<li>
				<span class="label">修改你的图像:</span>
				<div class="upload_content inline_block">
					<input type="hidden" name="user_face" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['user_face'];?>
" />
					<ul class="img_content" id="img_content">
						
					</ul>
					<div class="file_content">
						<input id="my_uploadify" name="my_uploadify" class="inline_block" type="file" multiple="false" />
					</div>
				</div>
			</li>
			<li>
				<span class="label">电话</span>
				<input name="user_tel" type="text" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['user_tel'];?>
" class="user_tel" prompt="请输入你真实的电话,这样方便别人需要(有)商品时能联系到你" placeholder="请输入你真实的电话,这样方便别人需要(有)商品时能联系到你" />
			</li>
			<li>
				<span class="label">QQ</span>
				<input name="user_qq" type="text" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['user_qq'];?>
" class="user_qq" prompt="请输入你真实的QQ,这样方便别人需要(有)商品时能联系到你" placeholder="请输入你真实的QQ,这样方便别人需要(有)商品时能联系到你" />
			</li>
			<li>
				<span class="label">个人描述</span>
				<textarea name="miaoshu" placeholder="输入你的格言,或者爱好,或者一句你想表达的话" ><?php echo $_smarty_tpl->tpl_vars['user']->value['miaoshu'];?>
</textarea>
			</li>
			<li>
				<input type="submit" value="提交修改" />
			</li>
		</form>
	</ul>
	<ul class="register_form_content" style="display:<?php echo $_smarty_tpl->tpl_vars['modify_type']->value['psd'];?>
;">
		<form action="?login!create_user.html" id="modify_form_psd" method="post">
			<li>
				<span class="label">旧的密码</span>
				<input name="old_password" type="password" class="must password" prompt="请输入旧密码" placeholder="请输入旧密码" />
			</li>
			<li>
				<span class="label">密码</span>
				<input name="new_password" type="password" class="must password" prompt="请输入新密码" placeholder="请输入新密码" />
			</li>
			<li>
				<span class="label">确认密码</span>
				<input name="password_sure" type="password" class="must password password_sure" prompt="请再次输入新密码" placeholder="再次输入密码" />
			</li>
			<li>
				<input type="submit" value="提交修改" />
			</li>
		</form>
	</ul>
</div>
</body>
</html><?php }} ?>
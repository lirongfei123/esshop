<?php /* Smarty version Smarty-3.1.11, created on 2013-04-22 12:37:29
         compiled from "D:\AppServ\www\esshop\webroot\modification.html" */ ?>
<?php /*%%SmartyHeaderCode:92085168b8a14db2c1-84877724%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48e74be53fa0f9a4d936b5b2a43810f8cb6cc049' => 
    array (
      0 => 'D:\\AppServ\\www\\esshop\\webroot\\modification.html',
      1 => 1366634248,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '92085168b8a14db2c1-84877724',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5168b8a1751fd1_71132752',
  'variables' => 
  array (
    'modify_type' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5168b8a1751fd1_71132752')) {function content_5168b8a1751fd1_71132752($_smarty_tpl) {?><!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=10" />
<script src="public/javascript/common.js"></script>
<link rel="stylesheet" type="text/css" href="public/javascript/form_check/formCheck.css" />
<link rel="stylesheet" type="text/css" href="public/javascript/uploadify/uploadify.css" />
<script type="text/javascript">
	import_script(["public/javascript/form_check/formCheck.js",
	               "public/javascript/form_check/json2.js",
	               "public/javascript/uploadify/jquery.uploadify.min.js",
	               "public/javascript/register.js"]);
	import_style([
	              "public/css/login_register.css",
	              "public/css/modification.css"
	              ]);
</script>
<title>资料修改</title>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("top_logo.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="main_body">
	<div class="register_title clearfix">
		<span class="caption">资料修改</span>
	</div>
	<ul class="register_form_content" style="display:<?php echo $_smarty_tpl->tpl_vars['modify_type']->value['info'];?>
;">
		<form action="?login!create_user.html" id="modify_form_info" name="modify_form_info" method="post">
			<li>
				<span class="label">修改你的图像:</span>
				<div class="upload_content inline_block">
					<input type="hidden" name="user_face" />
					<ul class="img_content" id="img_content">
						
					</ul>
					<div class="file_content">
						<input id="my_uploadify" name="my_uploadify" class="inline_block" type="file" multiple="false" />
					</div>
				</div>
			</li>
			<li>
				<span class="label">电话</span>
				<input name="user_tel" type="text" class="user_tel" prompt="请输入你真实的电话,这样方便别人需要(有)商品时能联系到你" placeholder="请输入你真实的电话,这样方便别人需要(有)商品时能联系到你" />
			</li>
			<li>
				<span class="label">QQ</span>
				<input name="user_qq" type="text" class="user_qq" prompt="请输入你真实的QQ,这样方便别人需要(有)商品时能联系到你" placeholder="请输入你真实的QQ,这样方便别人需要(有)商品时能联系到你" />
			</li>
			<li>
				<span class="label">个人描述</span>
				<textarea name="miaoshu" placeholder="输入你的格言,或者爱好,或者一句你想表达的话" ></textarea>
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
				<input name="oldpassword" type="password" class="must password" placeholder="请输入密码" />
			</li>
			<li>
				<span class="label">密码</span>
				<input name="password" type="password" class="must oldpassword" placeholder="请输入旧密码" />
			</li>
			<li>
				<span class="label">确认密码</span>
				<input name="password_sure" type="password" class="must password_sure" prompt="再次输入密码" placeholder="再次输入密码" />
			</li>
			<li>
				<input type="submit" value="提交修改" />
			</li>
		</form>
	</ul>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html><?php }} ?>
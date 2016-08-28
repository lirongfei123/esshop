<?php /* Smarty version Smarty-3.1.11, created on 2013-04-24 02:07:34
         compiled from "D:\AppServ\www\esshop\webroot\register.html" */ ?>
<?php /*%%SmartyHeaderCode:1546251599863de9348-84481346%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '398be2d4a62d349e5531b9088315b33482deb802' => 
    array (
      0 => 'D:\\AppServ\\www\\esshop\\webroot\\register.html',
      1 => 1366712895,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1546251599863de9348-84481346',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_51599863e4bb37_55122129',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51599863e4bb37_55122129')) {function content_51599863e4bb37_55122129($_smarty_tpl) {?><!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=10" />
<script src="public/javascript/common.js"></script>
<link rel="stylesheet" type="text/css" href="public/css/login_register.css" />
<link rel="stylesheet" type="text/css" href="public/javascript/uploadify/uploadify.css" />
<script type="text/javascript">
	import_script(["public/javascript/formcheck/formcheck.js",
	               "public/javascript/uploadify/jquery.uploadify.min.js",
	               "public/javascript/register.js"]);
</script>
<title>新用户注册</title>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("top_logo.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="main_body">
	<div class="register_title clearfix">
		<span class="caption">新用户注册</span>
		<span class="already">已经注册?<a href="?login!login.html">立即登录</a></span>
	</div>
	<ul class="register_form_content">
		<form action="?login!create_user.html" id="register_form" name="register_form" method="post">
			<li>
				<span class="label">选择你的图像:</span>
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
				<span class="label">邮箱</span>
				<input name="email" type="text" class="must email" placeholder="请输入邮箱" />
			</li>
			<li>
				<span class="label">用户名</span>
				<input name="username" type="text" class="must username" placeholder="请输入用户名" />
			</li>
			<li>
				<span class="label">密码</span>
				<input name="password" type="password" class="must password" placeholder="请输入密码" />
			</li>
			<li>
				<span class="label">确认密码</span>
				<input name="password_sure" type="password" class="must password_sure" prompt="再次输入密码" placeholder="再次输入密码" />
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
				<input type="submit" value="提交注册" />
			</li>
		</form>
	</ul>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html><?php }} ?>
<?php /* Smarty version Smarty-3.1.11, created on 2013-04-24 02:07:12
         compiled from "D:\AppServ\www\esshop\webroot\login.html" */ ?>
<?php /*%%SmartyHeaderCode:8122515998622302b7-68783531%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66108144e3b152c82bd2f870f172abc2bb734029' => 
    array (
      0 => 'D:\\AppServ\\www\\esshop\\webroot\\login.html',
      1 => 1366712873,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8122515998622302b7-68783531',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_515998622d3e69_10633565',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_515998622d3e69_10633565')) {function content_515998622d3e69_10633565($_smarty_tpl) {?><!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=10" />
<script src="public/javascript/common.js"></script>
<link rel="stylesheet" type="text/css" href="public/css/login_register.css" />
<script type="text/javascript">
	import_script(["public/javascript/formcheck/formcheck.js",
	               "public/javascript/js_save.js",
	               "public/javascript/login.js"]);
</script>
<title>用户登录</title>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("top_logo.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="main_body">
	<div class="register_title">
		<span class="caption">用户登录</span>
		<span class="already">还没账号?<a href="?login!register.html">30秒注册</a></span>
	</div>
	<ul class="register_form_content">
		<form action="?login!gologin.html" id="login_form" name="login_form" method="post">
			<li>
				<span class="label">用户名/邮箱</span>
				<input name="login_username" type="text" class="must" prompt="请输入用户名/邮箱" placeholder="请输入用户名/邮箱" />
			</li>
			<li>
				<span class="label">确认密码</span>
				<input name="login_password" type="password" class="must" prompt="请输入密码" placeholder="请输入密码" />
			</li>
			<li class="keep_login">
				<label><input name="keep_login" type="checkbox" />保持登录</label>
			</li>
			<li>
				<input type="submit" value="登录" />
			</li>
		</form>
	</ul>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html><?php }} ?>
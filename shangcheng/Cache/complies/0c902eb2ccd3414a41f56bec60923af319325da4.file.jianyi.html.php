<?php /* Smarty version Smarty-3.1.11, created on 2013-04-02 11:50:58
         compiled from "D:\AppServ\www\esshop\webroot\jianyi.html" */ ?>
<?php /*%%SmartyHeaderCode:5119515ac6223ce927-83030965%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c902eb2ccd3414a41f56bec60923af319325da4' => 
    array (
      0 => 'D:\\AppServ\\www\\esshop\\webroot\\jianyi.html',
      1 => 1364654000,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5119515ac6223ce927-83030965',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_515ac6224c8605_27701568',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_515ac6224c8605_27701568')) {function content_515ac6224c8605_27701568($_smarty_tpl) {?><!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=10" />
<script src="public/javascript/common.js"></script>
<link rel="stylesheet" type="text/css" href="public/css/login_register.css" />
<link rel="stylesheet" type="text/css" href="public/javascript/form_check/formCheck.css" />
<script type="text/javascript">
	import_script(["public/javascript/jianyi.js"]);
</script>
<title>反馈建议</title>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("top_logo.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="main_body">
	<div class="register_title">
		<span class="caption">反馈意见</span>
	</div>
	<ul class="yijian_form_content">
		<form name="jianyi_form">
			<li style="margin:10px 0;">
				<span class="label">你的联系方式</span>
				<input name="user" type="text" />
			</li>
			<li style="margin:10px 0;">
				<span class="label">你的意见</span>
				<textarea name="detail" rows="10" cols="60"></textarea>
			</li>
			<li>
				<input type="submit" value="提交" />
			</li>
		</form>
	</ul>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html><?php }} ?>
<?php /* Smarty version Smarty-3.1.11, created on 2013-04-02 11:49:13
         compiled from "D:\AppServ\www\esshop\webroot\center\message_new.html" */ ?>
<?php /*%%SmartyHeaderCode:1664515ac46ef26ae9-35435258%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'efdb5e4f474280fe47f1e3b83ccf9489d8f28314' => 
    array (
      0 => 'D:\\AppServ\\www\\esshop\\webroot\\center\\message_new.html',
      1 => 1364903347,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1664515ac46ef26ae9-35435258',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_515ac46f071376_58215013',
  'variables' => 
  array (
    'message' => 0,
    'username' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_515ac46f071376_58215013')) {function content_515ac46f071376_58215013($_smarty_tpl) {?><!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=10" />
<title>我的个人中心</title>
<script src="public/javascript/common.js"></script>
<link rel="stylesheet" type="text/css" href="public/css/center_common.css" />
<link rel="stylesheet" type="text/css" href="public/css/message_new.css" />
<script type="text/javascript">
	import_script(["public/javascript/kindeditor/kindeditor-min.js","public/javascript/message_new.js"]);
</script>
</head>
<body>
<div id="main_body">
	<div class="title">
		<span class="caption">回复消息</span>
	</div>
	<div class="main_content">
		<ul><form name="message_new">
			<li>
				<label class="clearfix">
					<span class="caption_label">收件人:</span>
					<input value="<?php echo $_smarty_tpl->tpl_vars['message']->value['sender'];?>
" name="receiver" type="text" disabled />
					<input value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
" name="sender" type="hidden" />
				</label>
			</li>
			<li>
				<label class="clearfix">
					<span class="caption_label">主题:</span>
					<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['message']->value['subject'];?>
" name="subject" type="subject" style="width:523px;" />
				</label>
			</li>
			<li style="min-height:200px;">
				<label class="clearfix">
					<span class="caption_label">回复内容:</span>
					<div class="kind_content">
						<textarea name="kind_textarea" cols="60" rows="10">
							<?php echo $_smarty_tpl->tpl_vars['message']->value['message'];?>

						</textarea>
					</div>
				</label>
			</li>
			<li>
				<input type="submit" value="回复" />
			</li>
		</form></ul>
	</div>
</div>
</body>
</html>
<?php }} ?>